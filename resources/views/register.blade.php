<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WedSphere - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-soft': 'pulse-soft 2s ease-in-out infinite',
                        'shimmer': 'shimmer 2s linear infinite',
                        'bounce-soft': 'bounce-soft 2s ease-in-out infinite',
                        'slide-up': 'slide-up 0.6s ease-out',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        'pulse-soft': {
                            '0%, 100%': { opacity: '1' },
                            '50%': { opacity: '0.7' },
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-200% 0' },
                            '100%': { backgroundPosition: '200% 0' },
                        },
                        'bounce-soft': {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        'slide-up': {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #ec4899, #f97316, #a855f7);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
        
        .input-glow:focus {
            box-shadow: 0 0 0 3px rgba(236, 72, 153, 0.1);
        }
        
        .heart-float {
            animation: float 3s ease-in-out infinite;
        }
        
        .shimmer-bg {
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.5) 50%, transparent 70%);
            background-size: 200% 100%;
            animation: shimmer 2s linear infinite;
        }

        .step-indicator {
            transition: all 0.3s ease;
        }

        .step-indicator.active {
            background: linear-gradient(135deg, #ec4899, #a855f7);
            color: white;
        }

        .step-indicator.completed {
            background: linear-gradient(135deg, #10b981, #34d399);
            color: white;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-rose-400 via-pink-300 to-purple-400 flex items-center justify-center p-4 relative overflow-auto">
    <!-- Floating Hearts Background -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-16 left-12 text-rose-300 text-3xl animate-bounce-soft" style="animation-delay: 0s;">💍</div>
        <div class="absolute top-28 right-16 text-pink-300 text-2xl animate-bounce-soft" style="animation-delay: 1s;">💖</div>
        <div class="absolute bottom-32 left-16 text-purple-300 text-4xl animate-bounce-soft" style="animation-delay: 2s;">💗</div>
        <div class="absolute bottom-16 right-12 text-rose-400 text-3xl animate-bounce-soft" style="animation-delay: 1.5s;">💝</div>
        <div class="absolute top-1/2 left-8 text-pink-200 text-2xl animate-bounce-soft" style="animation-delay: 0.5s;">💘</div>
        <div class="absolute top-1/3 right-8 text-purple-200 text-3xl animate-bounce-soft" style="animation-delay: 2.5s;">💞</div>
        <div class="absolute top-2/3 left-1/4 text-rose-200 text-xl animate-bounce-soft" style="animation-delay: 3s;">🌹</div>
        <div class="absolute top-1/4 right-1/3 text-pink-200 text-2xl animate-bounce-soft" style="animation-delay: 1.8s;">🎀</div>
    </div>

    <!-- Register Form Container -->
    <div class="glass-effect rounded-3xl shadow-2xl w-full h-full max-w-lg p-10 relative overflow-hidden animate-slide-up">
        <!-- Shimmer overlay -->
        <div class="absolute inset-0 shimmer-bg opacity-20 pointer-events-none"></div>

<a href="{{ url('/') }}" class="absolute top-4 right-4 text-gray-600 hover:text-rose-500 transition-colors p-2 rounded-full hover:bg-white/50 z-20">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
    </svg>
</a>

        
        <!-- Logo and Header -->
        <div class="text-center mb-8 relative z-10">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-rose-400 to-pink-600 rounded-full mb-4 shadow-lg">
                <span class="text-3xl">💕</span>
            </div>
            <h1 class="text-4xl font-bold gradient-text mb-2">WedSphere</h1>
            <p class="text-gray-600 text-sm">Start your perfect wedding journey</p>
        </div>

        <!-- Progress Steps -->
        <div class="flex justify-center mb-8 relative z-10">
            <div class="flex items-center space-x-4">
                <div class="step-indicator active flex items-center justify-center w-8 h-8 rounded-full text-sm font-semibold">
                    1
                </div>
                <div class="w-12 h-1 bg-gray-300 rounded"></div>
                <div class="step-indicator flex items-center justify-center w-8 h-8 rounded-full bg-gray-300 text-gray-600 text-sm font-semibold">
                    2
                </div>
                <div class="w-12 h-1 bg-gray-300 rounded"></div>
                <div class="step-indicator flex items-center justify-center w-8 h-8 rounded-full bg-gray-300 text-gray-600 text-sm font-semibold">
                    3
                </div>
            </div>
        </div>

        <!-- Register Form -->
        <form class="space-y-6 relative z-10" id="registerForm">
            <!-- Step 1: Basic Information -->
            <div id="step1" class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Tell us about yourself</h3>
                
                <!-- Name Fields -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                        <input 
                            type="text" 
                            id="firstName" 
                            name="firstName" 
                            required
                            class="input-glow w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent bg-white/80 backdrop-blur-sm transition-all duration-300"
                            placeholder="Your first name"
                        >
                    </div>
                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                        <input 
                            type="text" 
                            id="lastName" 
                            name="lastName" 
                            required
                            class="input-glow w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent bg-white/80 backdrop-blur-sm transition-all duration-300"
                            placeholder="Your last name"
                        >
                    </div>
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </div>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                            class="input-glow w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent bg-white/80 backdrop-blur-sm transition-all duration-300"
                            placeholder="your.email@example.com"
                        >
                    </div>
                </div>

                <!-- Phone Input -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            class="input-glow w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent bg-white/80 backdrop-blur-sm transition-all duration-300"
                            placeholder="+1 (555) 123-4567"
                        >
                    </div>
                </div>

                <!-- Continue Button -->
                <button 
                    type="button" 
                    onclick="nextStep()"
                    class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-xl text-white bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transform hover:scale-105 transition-all duration-300 shadow-lg"
                >
                    Continue to Wedding Details
                    <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </button>
            </div>

            <!-- Step 2: Wedding Details -->
            <div id="step2" class="space-y-4 hidden">
                <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Wedding Details</h3>
                
                <!-- Partner Name -->
                <div>
                    <label for="partnerName" class="block text-sm font-medium text-gray-700 mb-2">Partner's Name</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-pink-400">💕</span>
                        </div>
                        <input 
                            type="text" 
                            id="partnerName" 
                            name="partnerName" 
                            class="input-glow w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent bg-white/80 backdrop-blur-sm transition-all duration-300"
                            placeholder="Your partner's name"
                        >
                    </div>
                </div>

                <!-- Wedding Date -->
                <div>
                    <label for="weddingDate" class="block text-sm font-medium text-gray-700 mb-2">Wedding Date</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input 
                            type="date" 
                            id="weddingDate" 
                            name="weddingDate" 
                            class="input-glow w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent bg-white/80 backdrop-blur-sm transition-all duration-300"
                        >
                    </div>
                </div>

                <!-- Wedding Location -->
                <div>
                    <label for="weddingLocation" class="block text-sm font-medium text-gray-700 mb-2">Wedding Location</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <input 
                            type="text" 
                            id="weddingLocation" 
                            name="weddingLocation" 
                            class="input-glow w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent bg-white/80 backdrop-blur-sm transition-all duration-300"
                            placeholder="City, State or Venue"
                        >
                    </div>
                </div>

                <!-- Budget Range -->
                <div>
                    <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">Estimated Budget</label>
                    <select 
                        id="budget" 
                        name="budget" 
                        class="input-glow w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent bg-white/80 backdrop-blur-sm transition-all duration-300"
                    >
                        <option value="">Select your budget range</option>
                        <option value="under-10k">Under $10,000</option>
                        <option value="10k-25k">$10,000 - $25,000</option>
                        <option value="25k-50k">$25,000 - $50,000</option>
                        <option value="50k-100k">$50,000 - $100,000</option>
                        <option value="over-100k">Over $100,000</option>
                    </select>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex space-x-4">
                    <button 
                        type="button" 
                        onclick="prevStep()"
                        class="flex-1 flex justify-center py-3 px-4 border border-gray-300 text-sm font-medium rounded-xl text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-all duration-300"
                    >
                        <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                        </svg>
                        Back
                    </button>
                    <button 
                        type="button" 
                        onclick="nextStep()"
                        class="flex-1 flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-xl text-white bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transform hover:scale-105 transition-all duration-300 shadow-lg"
                    >
                        Continue
                        <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Step 3: Account Setup -->
            <div id="step3" class="space-y-4 hidden">
                <h3 class="text-lg font-semibold text-gray-800 text-center mb-4">Secure Your Account</h3>
                
                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="input-glow w-full pl-10 pr-12 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent bg-white/80 backdrop-blur-sm transition-all duration-300"
                            placeholder="Create a strong password"
                        >
                        <button type="button" onclick="togglePassword('password')" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg id="eyeIcon1" class="h-5 w-5 text-gray-400 hover:text-gray-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Confirm Password Input -->
                <div>
                    <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <input 
                            type="password" 
                            id="confirmPassword" 
                            name="confirmPassword" 
                            required
                            class="input-glow w-full pl-10 pr-12 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-pink-500 focus:border-transparent bg-white/80 backdrop-blur-sm transition-all duration-300"
                            placeholder="Confirm your password"
                        >
                        <button type="button" onclick="togglePassword('confirmPassword')" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg id="eyeIcon2" class="h-5 w-5 text-gray-400 hover:text-gray-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input 
                            id="terms" 
                            name="terms" 
                            type="checkbox" 
                            required
                            class="h-4 w-4 text-pink-600 focus:ring-pink-500 border-gray-300 rounded"
                        >
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="text-gray-700">
                            I agree to the 
                            <a href="#" class="font-medium text-pink-600 hover:text-pink-500 transition-colors">Terms and Conditions</a>
                            and 
                            <a href="#" class="font-medium text-pink-600 hover:text-pink-500 transition-colors">Privacy Policy</a>
                        </label>
                    </div>
                </div>

                <!-- Marketing Emails -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input 
                            id="marketing" 
                            name="marketing" 
                            type="checkbox" 
                            class="h-4 w-4 text-pink-600 focus:ring-pink-500 border-gray-300 rounded"
                        >
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="marketing" class="text-gray-700">
                            Send me wedding tips and inspiration emails
                        </label>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex space-x-4">
                    <button 
                        type="button" 
                        onclick="prevStep()"
                        class="flex-1 flex justify-center py-3 px-4 border border-gray-300 text-sm font-medium rounded-xl text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-all duration-300"
                    >
                        <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                        </svg>
                        Back
                    </button>
                    <button 
                        type="submit" 
                        class="flex-1 flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-xl text-white bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transform hover:scale-105 transition-all duration-300 shadow-lg"
                    >
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-pink-300 group-hover:text-pink-200 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        Create My Account
                    </button>
                </div>
            </div>

            <!-- Divider (only show on step 1) -->
            <div id="divider" class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Or sign up with</span>
                    </div>
                </div>
            </div>

            <!-- Social Login (only show on step 1) -->
            <div id="socialLogin" class="mt-6 grid grid-cols-2 gap-3">
                <button 
                    type="button" 
                    class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-xl shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-all duration-300 hover:scale-105"
                >
                    <svg class="h-5 w-5" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    <span class="ml-2">Google</span>
                </button>

                <button 
                    type="button" 
                    class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-xl shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-all duration-300 hover:scale-105"
                >
                    <svg class="h-5 w-5" fill="#1877F2" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    <span class="ml-2">Facebook</span>
                </button>
            </div>
        </form>

        <!-- Sign In Link -->
        <div class="mt-6 text-center relative z-10">
            <p class="text-sm text-gray-600">
                Already have an account? 
                <a href="{{ url('/login') }}" class="font-medium text-pink-600 hover:text-pink-500 transition-colors">
                    Sign in to your wedding
                </a>
            </p>
        </div>
    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 3;

        function updateStepIndicators() {
            for (let i = 1; i <= totalSteps; i++) {
                const indicator = document.querySelectorAll('.step-indicator')[i - 1];
                if (i < currentStep) {
                    indicator.className = 'step-indicator completed flex items-center justify-center w-8 h-8 rounded-full text-sm font-semibold';
                } else if (i === currentStep) {
                    indicator.className = 'step-indicator active flex items-center justify-center w-8 h-8 rounded-full text-sm font-semibold';
                } else {
                    indicator.className = 'step-indicator flex items-center justify-center w-8 h-8 rounded-full bg-gray-300 text-gray-600 text-sm font-semibold';
                }
            }
        }

        function showStep(step) {
            // Hide all steps
            for (let i = 1; i <= totalSteps; i++) {
                document.getElementById(`step${i}`).classList.add('hidden');
            }
            
            // Show current step
            document.getElementById(`step${step}`).classList.remove('hidden');
            
            // Show/hide social login and divider only on step 1
            const divider = document.getElementById('divider');
            const socialLogin = document.getElementById('socialLogin');
            
            if (step === 1) {
                divider.classList.remove('hidden');
                socialLogin.classList.remove('hidden');
            } else {
                divider.classList.add('hidden');
                socialLogin.classList.add('hidden');
            }
            
            updateStepIndicators();
        }

        function nextStep() {
            if (currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }

        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const eyeIcon = inputId === 'password' ? document.getElementById('eyeIcon1') : document.getElementById('eyeIcon2');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21" />
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                `;
            }
        }

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate passwords match
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }
            
            // Add your registration logic here
            alert('Registration functionality would be implemented here!');
        });

        // Initialize the form
        showStep(1);
    </script>
</body>
</html>