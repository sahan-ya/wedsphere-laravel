<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href={{ asset('css/style.css') }} rel="stylesheet">

    <style>
        /* Add some basic styling for the progress bar if not already in style.css */
        .progress-bar {
            width: 100%;
            background-color: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
            margin-top: 10px;
        }

        .progress-fill {
            height: 25px;
            background-color: #ff69b4; /* Pink color for the progress */
            width: 0%; /* Initial width */
            border-radius: 5px;
            text-align: center;
            line-height: 25px;
            color: white;
            transition: width 0.5s ease-in-out; /* Smooth transition for the bar fill */
        }
        .step-checkbox {
            margin-top: 15px;
            text-align: right; /* Align checkbox to the right */
        }
        .step-checkbox label {
            display: flex;
            align-items: center;
            justify-content: flex-end; /* Align content to the right */
            cursor: pointer;
        }
        .step-checkbox input[type="checkbox"] {
            margin-left: 10px; /* Space between text and checkbox */
            transform: scale(1.3); /* Make checkbox slightly larger */
            accent-color: #ff69b4; /* Change checkbox color */
        }

        /* Basic styling for the budget tracker */
        .budget-tracker {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .budget-input input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }
        .budget-input button {
            padding: 8px 15px;
            background-color: #ff69b4;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .budget-input button:hover {
            background-color: #e65a9e;
        }
    </style>
</head>
<body class="features">
   @include('layouts.header')
    <div class="planning-section" id="planningSection">
            <div class="planning-header">
                <button class="logout-btn" onclick="logout()">Logout</button>
                <h1>Your Wedding Journey</h1>
                <div class="user-welcome" id="userWelcome"></div>
            </div>

            <div class="planning-content">
                <div class="progress-tracker">
                    <h3>Planning Progress</h3>
                    <div class="progress-bar">
                        <div class="progress-fill" id="progressFill" style="width: 0%"></div>
                    </div>
                    <div class="progress-text" id="progressText">0% Complete (0 of 12 steps)</div>
                </div>

                <div class="budget-tracker">
                    <h3>💰 Budget Tracker</h3>
                    <a href="{{ url('/budget') }}"> click for plan budget free</a>
                    <div class="budget-input">
                        <input type="number" id="budgetInput" placeholder="Enter your budget">
                        <button onclick="setBudget()">Set Budget</button>
                    </div>
                    <div class="budget-display" id="budgetDisplay">Budget: Not set</div>
                </div>

                <div class="steps-container">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="timeline-indicator">12+ Months Before</div>
                        <h3>Set Your Foundation</h3>
                        <p>Start with the basics - your budget, guest list, and overall vision for your special day.</p>
                        <div class="step-details">
                            <h4>Key Tasks:</h4>
                            <ul>
                                <li>Determine your realistic budget and funding sources</li>
                                <li>Create a preliminary guest list to estimate wedding size <a href="{{ url('/guest') }}"> click for free</a></li>
                                <li>Choose your wedding style/theme (rustic, elegant, modern, etc.)</li>
                                <li>Select potential wedding dates considering seasonality</li>
                                <li>Decide if you want to hire a wedding planner</li>
                            </ul>
                        </div>
                        <div class="step-checkbox">
                            <label>
                                <input type="checkbox" data-step="1"> Step 1 Complete
                            </label>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="timeline-indicator">12+ Months Before</div>
                        <h3>Build Your Team</h3>
                        <p>Assemble your wedding party and secure your dream venue - the foundation of your celebration.</p>
                        <div class="step-details">
                            <h4>Key Tasks:</h4>
                            <ul>
                                <li>Choose your wedding party (bridesmaids, groomsmen, maid of honor, best man)</li>
                                <li>Research and book your ceremony and reception venues  <a href="{{ url('/venue') }}"> click for free</a></li>
                                <li>Start your wedding dress search and gather inspiration  <a href="{{ url('/outfit') }}"> click for free</a></li>
                                <li>Book essential vendors: photographer, videographer, caterer, DJ/band <a href="{{ url('/service') }}"> click for free</a></li>
                            </ul>
                        </div>
                        <div class="step-checkbox">
                            <label>
                                <input type="checkbox" data-step="2"> Step 2 Complete
                            </label>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="timeline-indicator">9-11 Months Before</div>
                        <h3>Spread the Word</h3>
                        <p>Let your loved ones know about your big day and finalize your guest arrangements.</p>
                        <div class="step-details">
                            <h4>Key Tasks:</h4>
                            <ul>
                                <li>Send save-the-dates once venue and date are confirmed</li>
                                <li>Book accommodation blocks for out-of-town guests</li>
                                <li>Finalize your guest list and collect addresses <a href="{{ url('/invitation') }}"> click for free</a></li>
                                <li>Choose and order your wedding dress</li>
                                <li>Start your gift registry</li>
                            </ul>
                        </div>
                        <div class="step-checkbox">
                            <label>
                                <input type="checkbox" data-step="3"> Step 3 Complete
                            </label>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="timeline-indicator">9-11 Months Before</div>
                        <h3>Complete Your Vendor Team</h3>
                        <p>Book the remaining vendors to bring your vision to life.</p>
                        <div class="step-details">
                            <h4>Key Tasks:</h4>
                            <ul>
                                <li>Book florist for ceremony and reception arrangements  <a href="{{ url('/deco') }}"> click for free</a></li>
                                <li>Secure your officiant and discuss ceremony details</li>
                                <li>Book hair stylist and makeup artist (schedule trials)  <a href="{{ url('/saloon') }}"> click for free</a></li>
                                <li>Arrange transportation for wedding party and guests</li>
                                <li>Plan engagement photoshoot with your photographer  <a href="{{ url('/photo') }}"> click for free</a></li>
                            </ul>
                        </div>
                        <div class="step-checkbox">
                            <label>
                                <input type="checkbox" data-step="4"> Step 4 Complete
                            </label>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">5</div>
                        <div class="timeline-indicator">6-8 Months Before</div>
                        <h3>The Details Matter</h3>
                        <p>Focus on the special touches that will make your wedding uniquely yours.</p>
                        <div class="step-details">
                            <h4>Key Tasks:</h4>
                            <ul>
                                <li>Choose and purchase your wedding rings</li>
                                <li>Plan your honeymoon destination and book travel</li>
                                <li>Select bridesmaid dresses and groomsmen attire  <a href="{{ url('/outfit') }}"> click for free</a></li>
                                <li>Book rehearsal dinner venue if hosting one  <a href="{{ url('/catering') }}"> click for free</a></li>
                                <li>Schedule your first dress fitting</li>
                                <li>Book wedding cake baker and schedule tastings</li>
                            </ul>
                        </div>
                        <div class="step-checkbox">
                            <label>
                                <input type="checkbox" data-step="5"> Step 5 Complete
                            </label>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">6</div>
                        <div class="timeline-indicator">4-5 Months Before</div>
                        <h3>Make It Official</h3>
                        <p>Send invitations and finalize the important details with your vendors.</p>
                        <div class="step-details">
                            <h4>Key Tasks:</h4>
                            <ul>
                                <li>Send out wedding invitations (6-8 weeks before wedding)</li>
                                <li>Choose wedding music for key moments  <a href="{{ url('/entertainment') }}"> click for free</a></li>
                                <li>Purchase wedding shoes and accessories</li>
                                <li>Book beauty trials for hair and makeup  <a href="{{ url('/saloon') }}"> click for free</a></li>
                                <li>Finalize menu with caterer  <a href="{{ url('/catering') }}"> click for free</a></li>
                                <li>Understand marriage license requirements</li>
                            </ul>
                        </div>
                        <div class="step-checkbox">
                            <label>
                                <input type="checkbox" data-step="6"> Step 6 Complete
                            </label>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">7</div>
                        <div class="timeline-indicator">2-3 Months Before</div>
                        <h3>Perfect the Experience</h3>
                        <p>Fine-tune every detail to ensure your wedding day flows seamlessly.</p>
                        <div class="step-details">
                            <h4>Key Tasks:</h4>
                            <ul>
                                <li>Final dress fitting with shoes and accessories</li>
                                <li>Write your personal vows if desired</li>
                                <li>Create seating chart based on RSVPs  <a href="{{ url('/guest') }}"> click for free</a></li>
                                <li>Develop detailed wedding day timeline</li>
                                <li>Confirm all vendor details and arrangements</li>
                                <li>Purchase gifts for wedding party and family</li>
                            </ul>
                        </div>
                        <div class="step-checkbox">
                            <label>
                                <input type="checkbox" data-step="7"> Step 7 Complete
                            </label>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">8</div>
                        <div class="timeline-indicator">1 Month Before</div>
                        <h3>Final Preparations</h3>
                        <p>Handle the last-minute details and prepare for your big day.</p>
                        <div class="step-details">
                            <h4>Key Tasks:</h4>
                            <ul>
                                <li>Provide final guest count to caterer and venue</li>
                                <li>Obtain your marriage license</li>
                                <li>Confirm hair and makeup schedule</li>
                                <li>Make final vendor payments</li>
                                <li>Prepare welcome bags for out-of-town guests</li>
                                <li>Start packing for your honeymoon</li>
                            </ul>
                        </div>
                        <div class="step-checkbox">
                            <label>
                                <input type="checkbox" data-step="8"> Step 8 Complete
                            </label>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">9</div>
                        <div class="timeline-indicator">1 Week Before</div>
                        <h3>The Home Stretch</h3>
                        <p>Final confirmations and preparations for your wedding week.</p>
                        <div class="step-details">
                            <h4>Key Tasks:</h4>
                            <ul>
                                <li>Pick up wedding dress and suit</li>
                                <li>Confirm final details with wedding party</li>
                                <li>Double-check all transportation arrangements</li>
                                <li>Pack emergency kit for wedding day</li>
                                <li>Get manicures and pedicures  <a href="{{ url('/saloon') }}"> click for free</a></li>
                                <li>Focus on relaxation and hydration</li>
                            </ul>
                        </div>
                        <div class="step-checkbox">
                            <label>
                                <input type="checkbox" data-step="9"> Step 9 Complete
                            </label>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">10</div>
                        <div class="timeline-indicator">Day Before</div>
                        <h3>Almost There!</h3>
                        <p>Final preparations and getting ready for your special day.</p>
                        <div class="step-details">
                            <h4>Key Tasks:</h4>
                            <ul>
                                <li>Attend rehearsal and rehearsal dinner</li>
                                <li>Give rings and marriage license to officiant/best man</li>
                                <li>Get a good night's sleep!</li>
                                <li>Prepare anything needed for the morning</li>
                                <li>Relax and enjoy time with family and friends</li>
                            </ul>
                        </div>
                        <div class="step-checkbox">
                            <label>
                                <input type="checkbox" data-step="10"> Step 10 Complete
                            </label>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">11</div>
                        <div class="timeline-indicator">Wedding Day</div>
                        <h3>Your Big Day!</h3>
                        <p>The moment you've been planning for - enjoy every second!</p>
                        <div class="step-details">
                            <h4>Key Tasks:</h4>
                            <ul>
                                <li>Eat a good, substantial breakfast</li>
                                <li>Attend hair and makeup appointments</li>
                                <li>Get dressed with your wedding party</li>
                                <li>Take photos and enjoy the moment</li>
                                <li>Say "I Do!" and celebrate your love</li>
                            </ul>
                        </div>
                        <div class="step-checkbox">
                            <label>
                                <input type="checkbox" data-step="11"> Step 11 Complete
                            </label>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">12</div>
                        <div class="timeline-indicator">After Wedding</div>
                        <h3>Happily Ever After</h3>
                        <p>Complete the final tasks and transition into married life.</p>
                        <div class="step-details">
                            <h4>Key Tasks:</h4>
                            <ul>
                                <li>Send thank you notes within 3-6 months</li>
                                <li>Order photo albums and prints</li>
                                <li>Have wedding dress cleaned and preserved</li>
                                <li>Leave reviews for your vendors</li>
                                <li>Change your name if applicable</li>
                                <li>Enjoy your new life as a married couple!</li>
                            </ul>
                        </div>
                        <div class="step-checkbox">
                            <label>
                                <input type="checkbox" data-step="12"> Step 12 Complete
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
  </section>

    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.step-checkbox input[type="checkbox"]');
            const progressFill = document.getElementById('progressFill');
            const progressText = document.getElementById('progressText');
            const totalSteps = checkboxes.length;

            // --- Budget Tracker Logic ---
            const budgetInput = document.getElementById('budgetInput');
            const budgetDisplay = document.getElementById('budgetDisplay');

            function setBudget() {
                let budget = parseFloat(budgetInput.value);
                if (!isNaN(budget) && budget >= 0) {
                    localStorage.setItem('weddingBudget', budget); // Store budget
                    budgetDisplay.textContent = `Budget: Rs.${budget.toLocaleString()}`;
                    budgetInput.value = ''; // Clear input after setting
                } else {
                    alert('Please enter a valid positive number for your budget.');
                }
            }

            function loadBudget() {
                const savedBudget = localStorage.getItem('weddingBudget');
                if (savedBudget) {
                    budgetDisplay.textContent = `Budget: Rs.${parseFloat(savedBudget).toLocaleString()}`;
                }
            }

            // Make setBudget function globally accessible
            window.setBudget = setBudget;
            loadBudget(); // Load budget on page load

            // --- Planning Progress Logic ---

            // Function to update progress
            function updateProgress() {
                let completedSteps = 0;
                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        completedSteps++;
                    }
                });

                const percentage = (completedSteps / totalSteps) * 100;
                progressFill.style.width = `${percentage}%`;
                progressFill.textContent = `${Math.round(percentage)}%`; // Display percentage inside bar
                progressText.textContent = `${completedSteps} of ${totalSteps} steps completed`;
            }

            // Function to save checkbox state to localStorage
            function saveCheckboxState() {
                const checkboxStates = {};
                checkboxes.forEach(checkbox => {
                    checkboxStates[checkbox.dataset.step] = checkbox.checked;
                });
                localStorage.setItem('weddingProgress', JSON.stringify(checkboxStates));
            }

            // Function to load checkbox state from localStorage
            function loadCheckboxState() {
                const savedStates = localStorage.getItem('weddingProgress');
                if (savedStates) {
                    const checkboxStates = JSON.parse(savedStates);
                    checkboxes.forEach(checkbox => {
                        const stepNumber = checkbox.dataset.step;
                        if (checkboxStates[stepNumber]) {
                            checkbox.checked = true;
                        }
                    });
                }
                updateProgress(); // Update progress after loading states
            }

            // Add event listeners to all checkboxes
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    saveCheckboxState(); // Save state on change
                    updateProgress();     // Update progress on change
                });
            });

            // Initial load:
            loadCheckboxState(); // Load saved states and then update progress
        });

        // Placeholder for logout function, if you have one
        function logout() {
            alert('Logout functionality would be implemented here.');
            // You might clear localStorage here if progress is per-user
            // localStorage.removeItem('weddingProgress');
            // localStorage.removeItem('weddingBudget');
            // window.location.href = '/logout'; // Redirect to logout route
        }

        // Placeholder for user welcome, you'd populate this dynamically
        // document.getElementById('userWelcome').textContent = 'Welcome, [User Name]!';
    </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>