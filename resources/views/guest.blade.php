<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Management - WedSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
     <!-- Custom CSS -->
  <link href={{ asset('css/style.css') }} rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container py-12">
           <a class="back-btn" href="{{ url('/service') }}">back</a>
        <h1 class="text-5xl font-extrabold text-center text-rose-700 mb-12 drop-shadow-sm">Manage Your Wedding Guests</h1>

        <!-- Overview Section -->
        <div class="bg-white p-6 rounded-xl shadow-md mb-8 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            <div class="p-4 bg-rose-50 rounded-lg">
                <p class="text-3xl font-bold text-rose-600" id="total-guests">0</p>
                <p class="text-gray-600">Total Guests</p>
            </div>
            <div class="p-4 bg-blue-50 rounded-lg">
                <p class="text-3xl font-bold text-blue-600" id="rsvp-confirmed">0</p>
                <p class="text-gray-600">RSVP Confirmed</p>
            </div>
            <div class="p-4 bg-yellow-50 rounded-lg">
                <p class="text-3xl font-bold text-yellow-600" id="rsvp-pending">0</p>
                <p class="text-gray-600">RSVP Pending</p>
            </div>
        </div>

        <!-- Actions Section -->
        <div class="bg-white p-6 rounded-xl shadow-md mb-8 flex flex-col sm:flex-row justify-between items-center gap-4">
            <button id="add-guest-btn" class="px-6 py-3 bg-rose-500 text-white font-bold rounded-lg shadow-md hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 transition duration-150 ease-in-out w-full sm:w-auto">
                Add New Guest
            </button>
            <label for="guest-list-upload" class="px-6 py-3 bg-green-500 text-white font-bold rounded-lg shadow-md hover:bg-green-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-150 ease-in-out w-full sm:w-auto text-center">
                Import Guest List (CSV/Excel)
                <input type="file" id="guest-list-upload" accept=".csv, .xlsx" class="hidden">
            </label>
            <button id="send-invitations-btn" class="px-6 py-3 bg-blue-500 text-white font-bold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out w-full sm:w-auto">
                Send Invitations
            </button>
        </div>

        <!-- Guest List Table -->
        <div class="bg-white p-6 rounded-xl shadow-md overflow-x-auto">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Guest List</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="table-header-cell">Name</th>
                        <th class="table-header-cell">Email / Phone</th>
                        <th class="table-header-cell">Guests (Party Size)</th>
                        <th class="table-header-cell">RSVP Status</th>
                        <th class="table-header-cell">Table/Group</th>
                        <th class="table-header-cell">Actions</th>
                    </tr>
                </thead>
                <tbody id="guest-table-body" class="bg-white divide-y divide-gray-200">
                    <!-- Sample Guests -->
                    <tr data-guest-id="1">
                        <td class="table-body-cell">John & Jane Doe</td>
                        <td class="table-body-cell">john.jane@example.com</td>
                        <td class="table-body-cell">2</td>
                        <td class="table-body-cell">
                            <select class="rsvp-status-select">
                                <option value="Pending">Pending</option>
                                <option value="Confirmed">Confirmed</option>
                                <option value="Declined">Declined</option>
                            </select>
                        </td>
                        <td class="table-body-cell">Table A</td>
                        <td class="table-body-cell">
                            <button class="text-blue-600 hover:text-blue-800 font-medium edit-guest-btn">Edit</button>
                            <button class="text-red-600 hover:text-red-800 font-medium ml-2 delete-guest-btn">Delete</button>
                        </td>
                    </tr>
                    <tr data-guest-id="2">
                        <td class="table-body-cell">Alice Smith</td>
                        <td class="table-body-cell">alice.s@example.com</td>
                        <td class="table-body-cell">1</td>
                        <td class="table-body-cell">
                            <select class="rsvp-status-select">
                                <option value="Pending">Pending</option>
                                <option value="Confirmed" selected>Confirmed</option>
                                <option value="Declined">Declined</option>
                            </select>
                        </td>
                        <td class="table-body-cell">Table B</td>
                        <td class="table-body-cell">
                            <button class="text-blue-600 hover:text-blue-800 font-medium edit-guest-btn">Edit</button>
                            <button class="text-red-600 hover:text-red-800 font-medium ml-2 delete-guest-btn">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Seating Plan Preview (Placeholder) -->
        <div class="bg-white p-6 rounded-xl shadow-md mt-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Seating Plan Preview</h2>
            <div class="bg-gray-50 p-8 rounded-lg text-center text-gray-500 border border-dashed border-gray-300">
                <p class="mb-2">Your seating plan will appear here.</p>
                <p>Use the "Table/Group" column in the guest list to organize guests.</p>
                <button class="mt-4 px-6 py-2 bg-purple-500 text-white font-bold rounded-lg hover:bg-purple-600">
                    Design Seating Chart
                </button>
            </div>
        </div>
    </div>

    <!-- Add/Edit Guest Modal -->
    <div id="guest-modal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h3 id="modal-title" class="text-2xl font-bold text-gray-800 mb-6">Add New Guest</h3>
            <form id="guest-form" class="space-y-4">
                <div>
                    <label for="guest-name" class="block text-sm font-medium text-gray-700">Guest Name</label>
                    <input type="text" id="guest-name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-rose-500 focus:border-rose-500" required>
                </div>
                <div>
                    <label for="guest-email-phone" class="block text-sm font-medium text-gray-700">Email / Phone</label>
                    <input type="text" id="guest-email-phone" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-rose-500 focus:border-rose-500">
                </div>
                <div>
                    <label for="guest-party-size" class="block text-sm font-medium text-gray-700">Party Size (including self)</label>
                    <input type="number" id="guest-party-size" value="1" min="1" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-rose-500 focus:border-rose-500">
                </div>
                <div>
                    <label for="guest-rsvp-status" class="block text-sm font-medium text-gray-700">RSVP Status</label>
                    <select id="guest-rsvp-status" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-rose-500 focus:border-rose-500">
                        <option value="Pending">Pending</option>
                        <option value="Confirmed">Confirmed</option>
                        <option value="Declined">Declined</option>
                    </select>
                </div>
                <div>
                    <label for="guest-table-group" class="block text-sm font-medium text-gray-700">Table / Group</label>
                    <input type="text" id="guest-table-group" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-rose-500 focus:border-rose-500" placeholder="e.g., Table 1, Family">
                </div>
                <input type="hidden" id="guest-id">
                <div class="flex justify-end pt-4">
                    <button type="submit" class="px-6 py-3 bg-rose-500 text-white font-bold rounded-lg shadow-md hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                        Save Guest
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const guestTableBody = document.getElementById('guest-table-body');
            const totalGuestsSpan = document.getElementById('total-guests');
            const rsvpConfirmedSpan = document.getElementById('rsvp-confirmed');
            const rsvpPendingSpan = document.getElementById('rsvp-pending');
            const addGuestBtn = document.getElementById('add-guest-btn');
            const guestListUpload = document.getElementById('guest-list-upload');
            const sendInvitationsBtn = document.getElementById('send-invitations-btn');

            const guestModal = document.getElementById('guest-modal');
            const modalTitle = document.getElementById('modal-title');
            const closeButton = document.querySelector('#guest-modal .close-button');
            const guestForm = document.getElementById('guest-form');
            const guestIdInput = document.getElementById('guest-id');
            const guestNameInput = document.getElementById('guest-name');
            const guestEmailPhoneInput = document.getElementById('guest-email-phone');
            const guestPartySizeInput = document.getElementById('guest-party-size');
            const guestRsvpStatusSelect = document.getElementById('guest-rsvp-status');
            const guestTableGroupInput = document.getElementById('guest-table-group');

            let guests = [];
            let nextGuestId = 1; // For assigning unique IDs to new guests

            // Function to update the overview counts
            const updateOverview = () => {
                totalGuestsSpan.textContent = guests.length;
                const confirmed = guests.filter(guest => guest.rsvpStatus === 'Confirmed').length;
                const pending = guests.filter(guest => guest.rsvpStatus === 'Pending').length;
                rsvpConfirmedSpan.textContent = confirmed;
                rsvpPendingSpan.textContent = pending;
            };

            // Function to render guests in the table
            const renderGuests = () => {
                guestTableBody.innerHTML = '';
                guests.forEach(guest => {
                    const row = document.createElement('tr');
                    row.dataset.guestId = guest.id;
                    row.innerHTML = `
                        <td class="table-body-cell">${guest.name}</td>
                        <td class="table-body-cell">${guest.contact}</td>
                        <td class="table-body-cell">${guest.partySize}</td>
                        <td class="table-body-cell">
                            <select class="rsvp-status-select">
                                <option value="Pending" ${guest.rsvpStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                                <option value="Confirmed" ${guest.rsvpStatus === 'Confirmed' ? 'selected' : ''}>Confirmed</option>
                                <option value="Declined" ${guest.rsvpStatus === 'Declined' ? 'selected' : ''}>Declined</option>
                            </select>
                        </td>
                        <td class="table-body-cell">${guest.tableGroup}</td>
                        <td class="table-body-cell">
                            <button class="text-blue-600 hover:text-blue-800 font-medium edit-guest-btn">Edit</button>
                            <button class="text-red-600 hover:text-red-800 font-medium ml-2 delete-guest-btn">Delete</button>
                        </td>
                    `;
                    guestTableBody.appendChild(row);
                });
                updateOverview();
            };

            // Populate initial guests (from local storage or hardcoded samples)
            const storedGuests = JSON.parse(localStorage.getItem('weddingGuests')) || [
                { id: nextGuestId++, name: "John & Jane Doe", contact: "john.jane@example.com", partySize: 2, rsvpStatus: "Pending", tableGroup: "Table A" },
                { id: nextGuestId++, name: "Alice Smith", contact: "alice.s@example.com", partySize: 1, rsvpStatus: "Confirmed", tableGroup: "Table B" }
            ];
            guests = storedGuests;
            if (guests.length > 0) {
                // Ensure nextGuestId is higher than any existing ID
                nextGuestId = Math.max(...guests.map(g => g.id)) + 1;
            }
            renderGuests();

            // Save guests to local storage
            const saveGuests = () => {
                localStorage.setItem('weddingGuests', JSON.stringify(guests));
            };

            // Event listener for RSVP status change
            guestTableBody.addEventListener('change', (event) => {
                if (event.target.classList.contains('rsvp-status-select')) {
                    const row = event.target.closest('tr');
                    const guestId = parseInt(row.dataset.guestId);
                    const newStatus = event.target.value;
                    const guestIndex = guests.findIndex(g => g.id === guestId);
                    if (guestIndex > -1) {
                        guests[guestIndex].rsvpStatus = newStatus;
                        saveGuests();
                        updateOverview(); // Recalculate counts
                    }
                }
            });

            // Open Add Guest Modal
            addGuestBtn.addEventListener('click', () => {
                modalTitle.textContent = "Add New Guest";
                guestForm.reset();
                guestIdInput.value = ''; // Clear ID for new guest
                guestModal.style.display = 'flex';
            });

            // Close Modal
            closeButton.addEventListener('click', () => {
                guestModal.style.display = 'none';
            });

            window.addEventListener('click', (event) => {
                if (event.target === guestModal) {
                    guestModal.style.display = 'none';
                }
            });

            // Handle Add/Edit Guest Form Submission
            guestForm.addEventListener('submit', (event) => {
                event.preventDefault();
                const id = guestIdInput.value ? parseInt(guestIdInput.value) : null;
                const newGuest = {
                    name: guestNameInput.value,
                    contact: guestEmailPhoneInput.value,
                    partySize: parseInt(guestPartySizeInput.value),
                    rsvpStatus: guestRsvpStatusSelect.value,
                    tableGroup: guestTableGroupInput.value,
                };

                if (id) {
                    // Edit existing guest
                    const guestIndex = guests.findIndex(g => g.id === id);
                    if (guestIndex > -1) {
                        guests[guestIndex] = { ...guests[guestIndex], ...newGuest, id: id };
                    }
                } else {
                    // Add new guest
                    newGuest.id = nextGuestId++;
                    guests.push(newGuest);
                }
                saveGuests();
                renderGuests();
                guestModal.style.display = 'none';
            });

            // Edit and Delete Buttons (Delegation for dynamic rows)
            guestTableBody.addEventListener('click', (event) => {
                if (event.target.classList.contains('edit-guest-btn')) {
                    const row = event.target.closest('tr');
                    const guestId = parseInt(row.dataset.guestId);
                    const guestToEdit = guests.find(g => g.id === guestId);
                    if (guestToEdit) {
                        modalTitle.textContent = "Edit Guest";
                        guestIdInput.value = guestToEdit.id;
                        guestNameInput.value = guestToEdit.name;
                        guestEmailPhoneInput.value = guestToEdit.contact;
                        guestPartySizeInput.value = guestToEdit.partySize;
                        guestRsvpStatusSelect.value = guestToEdit.rsvpStatus;
                        guestTableGroupInput.value = guestToEdit.tableGroup;
                        guestModal.style.display = 'flex';
                    }
                } else if (event.target.classList.contains('delete-guest-btn')) {
                    const row = event.target.closest('tr');
                    const guestId = parseInt(row.dataset.guestId);
                    if (confirm('Are you sure you want to delete this guest?')) { // Using confirm for simplicity, custom modal recommended
                        guests = guests.filter(g => g.id !== guestId);
                        saveGuests();
                        renderGuests();
                    }
                }
            });

            // Mock functionality for file upload
            guestListUpload.addEventListener('change', (event) => {
                if (event.target.files.length > 0) {
                    alert('Simulating guest list import. In a real app, this would parse the file and add guests.');
                    // You'd typically use a library like Papa Parse for CSV or SheetJS for Excel
                    // to process the file and add guests to your 'guests' array.
                    event.target.value = ''; // Clear input for next upload
                }
            });

            // Mock functionality for Send Invitations
            sendInvitationsBtn.addEventListener('click', () => {
                const pendingGuests = guests.filter(guest => guest.rsvpStatus === 'Pending');
                if (pendingGuests.length > 0) {
                    alert(`Simulating sending digital invitations to ${pendingGuests.length} pending guests.`);
                    // In a real app, this would trigger your digital invitation sending mechanism,
                    // possibly linking to the digital invitation builder page or an API endpoint.
                } else {
                    alert('No guests with "Pending" RSVP status to send invitations to.');
                }
            });

        });
    </script>
</body>
</html>
