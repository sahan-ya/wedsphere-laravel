<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Control - WedSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
      <!-- Custom CSS -->
  <link href={{ asset('css/style.css') }} rel="stylesheet">

</head>
<body class="bg-gray-100 min-h-screen">
    
    <div class="container py-12">
            <a class="back-btn" href="{{ url('/service') }}">back</a>
        <h1 class="text-5xl font-extrabold text-center text-rose-700 mb-12 drop-shadow-sm">Wedding Budget Planner</h1>

        <!-- Budget Overview Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="budget-card bg-rose-50">
                <p class="text-gray-600 mb-2">Total Budget</p>
                <p class="text-4xl font-bold text-rose-600" id="total-budget">$0.00</p>
                <button id="set-budget-btn" class="mt-4 px-4 py-2 bg-rose-500 text-white font-semibold rounded-md hover:bg-rose-600 transition duration-150">Set Budget</button>
            </div>
            <div class="budget-card bg-blue-50">
                <p class="text-gray-600 mb-2">Total Expenses</p>
                <p class="text-4xl font-bold text-blue-600" id="total-expenses">$0.00</p>
            </div>
            <div class="budget-card bg-green-50">
                <p class="text-gray-600 mb-2">Remaining Balance</p>
                <p class="text-4xl font-bold text-green-600" id="remaining-balance">$0.00</p>
            </div>
        </div>

        <!-- Add Expense Section -->
        <div class="bg-white p-8 rounded-xl shadow-lg mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add New Expense</h2>
            <form id="add-expense-form" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="expense-item" class="block text-sm font-medium text-gray-700 mb-1">Expense Item</label>
                    <input type="text" id="expense-item" class="text-input" placeholder="e.g., Catering Deposit" required>
                </div>
                <div>
                    <label for="expense-category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select id="expense-category" class="select-input" required>
                        <option value="">Select Category</option>
                        <option value="Venue">Venue</option>
                        <option value="Catering">Catering</option>
                        <option value="Decorations">Decorations</option>
                        <option value="Photography">Photography</option>
                        <option value="Outfits">Outfits</option>
                        <option value="Invitations">Invitations</option>
                        <option value="Music">Music & Entertainment</option>
                        <option value="Miscellaneous">Miscellaneous</option>
                    </select>
                </div>
                <div>
                    <label for="expense-amount" class="block text-sm font-medium text-gray-700 mb-1">Amount</label>
                    <input type="number" id="expense-amount" class="text-input" step="0.01" min="0" placeholder="e.g., 2500.00" required>
                </div>
                <div>
                    <label for="expense-date" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                    <input type="date" id="expense-date" class="text-input" required>
                </div>
                <div class="md:col-span-2">
                    <label for="expense-notes" class="block text-sm font-medium text-gray-700 mb-1">Notes (Optional)</label>
                    <textarea id="expense-notes" rows="2" class="text-input" placeholder="Any specific details about this expense..."></textarea>
                </div>
                <div class="md:col-span-2 text-right">
                    <button type="submit" class="px-6 py-3 bg-rose-500 text-white font-bold rounded-lg shadow-md hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                        Add Expense
                    </button>
                </div>
            </form>
        </div>

        <!-- Expense List Table -->
        <div class="bg-white p-8 rounded-xl shadow-lg overflow-x-auto">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Expense List</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="table-header-cell">Item</th>
                        <th class="table-header-cell">Category</th>
                        <th class="table-header-cell text-right">Amount</th>
                        <th class="table-header-cell">Date</th>
                        <th class="table-header-cell">Notes</th>
                        <th class="table-header-cell">Actions</th>
                    </tr>
                </thead>
                <tbody id="expense-table-body" class="bg-white divide-y divide-gray-200">
                    <!-- Expenses will be dynamically loaded here -->
                </tbody>
            </table>
            <div id="no-expenses-message" class="text-center text-gray-500 py-6 hidden">
                No expenses added yet. Start tracking your budget!
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const totalBudgetSpan = document.getElementById('total-budget');
            const totalExpensesSpan = document.getElementById('total-expenses');
            const remainingBalanceSpan = document.getElementById('remaining-balance');
            const setBudgetBtn = document.getElementById('set-budget-btn');
            const addExpenseForm = document.getElementById('add-expense-form');
            const expenseTableBody = document.getElementById('expense-table-body');
            const noExpensesMessage = document.getElementById('no-expenses-message');

            let budget = parseFloat(localStorage.getItem('weddingBudget')) || 0;
            let expenses = JSON.parse(localStorage.getItem('weddingExpenses')) || [];

            // Function to format currency
            const formatCurrency = (amount) => {
                return `$${amount.toFixed(2)}`;
            };

            // Function to calculate and update overview
            const updateOverview = () => {
                const totalExpenses = expenses.reduce((sum, expense) => sum + expense.amount, 0);
                const remaining = budget - totalExpenses;

                totalBudgetSpan.textContent = formatCurrency(budget);
                totalExpensesSpan.textContent = formatCurrency(totalExpenses);
                remainingBalanceSpan.textContent = formatCurrency(remaining);

                // Highlight remaining balance color
                if (remaining < 0) {
                    remainingBalanceSpan.classList.remove('text-green-600');
                    remainingBalanceSpan.classList.add('text-red-600');
                } else {
                    remainingBalanceSpan.classList.remove('text-red-600');
                    remainingBalanceSpan.classList.add('text-green-600');
                }
            };

            // Function to render expenses in the table
            const renderExpenses = () => {
                expenseTableBody.innerHTML = '';
                if (expenses.length === 0) {
                    noExpensesMessage.classList.remove('hidden');
                } else {
                    noExpensesMessage.classList.add('hidden');
                    expenses.forEach((expense, index) => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td class="table-body-cell">${expense.item}</td>
                            <td class="table-body-cell">${expense.category}</td>
                            <td class="table-body-cell text-right">${formatCurrency(expense.amount)}</td>
                            <td class="table-body-cell">${expense.date}</td>
                            <td class="table-body-cell">${expense.notes || '-'}</td>
                            <td class="table-body-cell">
                                <button data-index="${index}" class="text-red-600 hover:text-red-800 font-medium delete-expense-btn">Delete</button>
                            </td>
                        `;
                        expenseTableBody.appendChild(row);
                    });
                }
                updateOverview();
            };

            // Initial render
            renderExpenses();

            // Set Budget functionality
            setBudgetBtn.addEventListener('click', () => {
                let newBudget = prompt('Enter your total wedding budget:', budget.toFixed(2));
                if (newBudget !== null) {
                    newBudget = parseFloat(newBudget);
                    if (!isNaN(newBudget) && newBudget >= 0) {
                        budget = newBudget;
                        localStorage.setItem('weddingBudget', budget);
                        updateOverview();
                    } else {
                        alert('Please enter a valid non-negative number for the budget.');
                    }
                }
            });

            // Add Expense functionality
            addExpenseForm.addEventListener('submit', (event) => {
                event.preventDefault();
                const newItem = document.getElementById('expense-item').value;
                const newCategory = document.getElementById('expense-category').value;
                const newAmount = parseFloat(document.getElementById('expense-amount').value);
                const newDate = document.getElementById('expense-date').value;
                const newNotes = document.getElementById('expense-notes').value;

                if (isNaN(newAmount) || newAmount <= 0) {
                    alert('Please enter a valid positive amount for the expense.');
                    return;
                }

                const newExpense = {
                    item: newItem,
                    category: newCategory,
                    amount: newAmount,
                    date: newDate,
                    notes: newNotes
                };

                expenses.push(newExpense);
                localStorage.setItem('weddingExpenses', JSON.stringify(expenses));
                renderExpenses();
                addExpenseForm.reset(); // Clear form fields
            });

            // Delete Expense functionality (event delegation)
            expenseTableBody.addEventListener('click', (event) => {
                if (event.target.classList.contains('delete-expense-btn')) {
                    const indexToDelete = parseInt(event.target.dataset.index);
                    if (confirm('Are you sure you want to delete this expense?')) { // Using confirm for simplicity
                        expenses.splice(indexToDelete, 1);
                        localStorage.setItem('weddingExpenses', JSON.stringify(expenses));
                        renderExpenses();
                    }
                }
            });
        });
    </script>
</body>
</html>
