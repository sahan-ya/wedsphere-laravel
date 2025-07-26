<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Wedding Planner</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }



        .planning-section {
            display: none;
            padding: 0;
            background: #f8f9fa;
        }

        .planning-header {
            background: linear-gradient(135deg, #ff6b9d 0%, #ffa8c3 100%);
            color: white;
            padding: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .planning-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { transform: rotate(0deg); }
            50% { transform: rotate(180deg); }
        }

        .planning-header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .user-welcome {
            font-size: 1.2em;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        .logout-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255,255,255,0.2);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 0.9em;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .planning-content {
            padding: 40px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .steps-container {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .step {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            border-left: 5px solid #ff6b9d;
            position: relative;
            transition: all 0.3s ease;
        }

        .step:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .step-number {
            position: absolute;
            top: -15px;
            left: 30px;
            background: linear-gradient(135deg, #ff6b9d 0%, #ffa8c3 100%);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2em;
            box-shadow: 0 4px 15px rgba(255, 107, 157, 0.3);
        }

        .step h3 {
            color: #333;
            font-size: 1.8em;
            margin-bottom: 15px;
            padding-left: 20px;
        }

        .step p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .step-details {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 15px;
        }

        .step-details h4 {
            color: #ff6b9d;
            margin-bottom: 10px;
        }

        .step-details ul {
            list-style: none;
            padding-left: 0;
        }

        .step-details li {
            padding: 8px 0;
            border-bottom: 1px solid #e0e0e0;
            position: relative;
            padding-left: 25px;
        }

        .step-details li:before {
            content: '💕';
            position: absolute;
            left: 0;
            top: 8px;
        }

        .step-details li:last-child {
            border-bottom: none;
        }

        .timeline-indicator {
            background: #ff6b9d;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9em;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 15px;
        }

        .budget-tracker {
            background: linear-gradient(135deg, #e8f5e8 0%, #f0f8f0 100%);
            border: 2px solid #28a745;
            border-radius: 15px;
            padding: 25px;
            margin-top: 30px;
            text-align: center;
        }

        .budget-tracker h3 {
            color: #28a745;
            margin-bottom: 15px;
        }

        .budget-input {
            display: flex;
            gap: 10px;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .budget-input input {
            padding: 10px;
            border: 2px solid #28a745;
            border-radius: 8px;
            width: 150px;
            font-size: 1em;
        }

        .budget-input button {
            padding: 10px 20px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1em;
            transition: background 0.3s ease;
        }

        .budget-input button:hover {
            background: #218838;
        }

        .budget-display {
            font-size: 1.5em;
            font-weight: bold;
            color: #28a745;
            margin-top: 15px;
        }

        .progress-tracker {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .progress-bar {
            width: 100%;
            height: 20px;
            background: #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #ff6b9d 0%, #ffa8c3 100%);
            border-radius: 10px;
            transition: width 0.3s ease;
            position: relative;
        }

        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.3) 50%, transparent 100%);
            animation: progress-shine 2s infinite;
        }

        @keyframes progress-shine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .progress-text {
            text-align: center;
            font-weight: bold;
            color: #555;
        }

        .step-checkbox {
            margin-top: 20px;
        }

        .step-checkbox label {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            font-weight: bold;
            color: #333;
        }

        .step-checkbox input[type="checkbox"] {
            width: 20px;
            height: 20px;
            accent-color: #ff6b9d;
        }

        @media (max-width: 768px) {
            .auth-forms {
                flex-direction: column;
                align-items: center;
            }
            
            .auth-form {
                width: 100%;
                max-width: 400px;
            }
            
            .planning-content {
                padding: 20px;
            }
            
            .step {
                padding: 20px;
            }
            
            .step h3 {
                font-size: 1.5em;
            }
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>

        <!-- Planning Section -->
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
                                <li>Create a preliminary guest list to estimate wedding size</li>
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
                                <li>Research and book your ceremony and reception venues</li>
                                <li>Start your wedding dress search and gather inspiration</li>
                                <li>Book essential vendors: photographer, videographer, caterer, DJ/band</li>
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
                                <li>Finalize your guest list and collect addresses</li>
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
                                <li>Book florist for ceremony and reception arrangements</li>
                                <li>Secure your officiant and discuss ceremony details</li>
                                <li>Book hair stylist and makeup artist (schedule trials)</li>
                                <li>Arrange transportation for wedding party and guests</li>
                                <li>Plan engagement photoshoot with your photographer</li>
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
                                <li>Select bridesmaid dresses and groomsmen attire</li>
                                <li>Book rehearsal dinner venue if hosting one</li>
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
                                <li>Choose wedding music for key moments</li>
                                <li>Purchase wedding shoes and accessories</li>
                                <li>Book beauty trials for hair and makeup</li>
                                <li>Finalize menu with caterer</li>
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
                                <li>Create seating chart based on RSVPs</li>
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
                                <li>Get manicures and pedicures</li>
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

    <script>
        // User data storage
        let currentUser = null;
        let users = JSON.parse(localStorage.getItem('weddingUsers') || '[]');
        let userProgress = JSON.parse(localStorage.getItem('userProgress') || '{}');

        // Initialize the application
        document.addEventListener('DOMContentLoaded', function() {
            // Check if user is already logged in
            const savedUser = localStorage.getItem('currentWeddingUser');
            if (savedUser) {
                currentUser = JSON.parse(savedUser);
                showPlanningSection();
            }

            // Set up form event listeners
            document.getElementById('registerForm').addEventListener('submit', handleRegister);
            document.getElementById('loginForm').addEventListener('submit', handleLogin);

            // Set up progress tracking
            const checkboxes = document.querySelectorAll('input[type="checkbox"][data-step]');
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateProgress);
            });
        });

        function handleRegister(e) {
            e.preventDefault();
            
            const name = document.getElementById('regName').value;
            const email = document.getElementById('regEmail').value;
            const partner = document.getElementById('regPartner').value;
            const weddingDate = document.getElementById('regWeddingDate').value;
            const password = document.getElementById('regPassword').value;

            // Check if user already exists
            if (users.find(user => user.email === email)) {
                alert('A user with this email already exists. Please login instead.');
                return;
            }

            // Create new user
            const newUser = {
                id: Date.now(),
                name,
                email,
                partner,
                weddingDate,
                password,
                registeredAt: new Date().toISOString()
            };

            users.push(newUser);
            localStorage.setItem('weddingUsers', JSON.stringify(users));
            
            currentUser = newUser;
            localStorage.setItem('currentWeddingUser', JSON.stringify(currentUser));
            
            // Initialize progress for new user
            userProgress[currentUser.id] = {
                completedSteps: [],
                budget: null
            };
            localStorage.setItem('userProgress', JSON.stringify(userProgress));

            showPlanningSection();
        }

        function handleLogin(e) {
            e.preventDefault();
            
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;

            const user = users.find(u =>