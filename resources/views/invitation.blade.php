<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Digital Invitation - WedSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&family=Dancing+Script:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
         <!-- Custom CSS -->
  <link href={{ asset('css/style.css') }} rel="stylesheet">
  
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container py-12">
        <a class="back-btn" href="{{ url('/service') }}">back</a>
        <h1 class="text-5xl font-extrabold text-center text-rose-700 mb-12 drop-shadow-sm">Design Your Perfect Digital Invitation</h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Customization Panel -->
            <div class="lg:col-span-2 bg-white p-8 rounded-xl shadow-lg space-y-8">
                <!-- Template Selection -->
                <section>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">1. Choose a Template</h2>
                    <div class="flex overflow-x-auto pb-4 gap-4" id="template-selector">
                        <img src="https://placehold.co/100x160/fecaca/9f1239?text=Temp+1" data-template-bg="https://placehold.co/400x700/fef2f2/be123c?text=Elegant+Bg" class="template-thumbnail selected" alt="Template 1">
                        <img src="https://placehold.co/100x160/dbeafe/1e40af?text=Temp+2" data-template-bg="https://placehold.co/400x700/eff6ff/1d4ed8?text=Floral+Bg" class="template-thumbnail" alt="Template 2">
                        <img src="https://placehold.co/100x160/e0e7ff/4338ca?text=Temp+3" data-template-bg="https://placehold.co/400x700/eef2ff/4f46e5?text=Minimal+Bg" class="template-thumbnail" alt="Template 3">
                        <img src="https://placehold.co/100x160/d1fae5/065f46?text=Temp+4" data-template-bg="https://placehold.co/400x700/ecfdf5/059669?text=Garden+Bg" class="template-thumbnail" alt="Template 4">
                        <img src="https://placehold.co/100x160/ffe4e6/be123c?text=Temp+5" data-template-bg="https://placehold.co/400x700/fee2e2/dc2626?text=Romantic+Bg" class="template-thumbnail" alt="Template 5">
                    </div>
                </section>

                <!-- Text Customization -->
                <section>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">2. Customize Your Text</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="invite-title" class="block text-sm font-medium text-gray-700 mb-1">Invitation Title</label>
                            <input type="text" id="invite-title" value="You're Invited!" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-rose-500 focus:border-rose-500 text-gray-700">
                        </div>
                        <div>
                            <label for="invite-message" class="block text-sm font-medium text-gray-700 mb-1">Main Message</label>
                            <textarea id="invite-message" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-rose-500 focus:border-rose-500 text-gray-700">Join us as we celebrate our wedding day. Your presence is our greatest gift.</textarea>
                        </div>
                        <div>
                            <label for="date-time" class="block text-sm font-medium text-gray-700 mb-1">Date & Time</label>
                            <input type="text" id="date-time" value="December 25, 2025 at 5:00 PM" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-rose-500 focus:border-rose-500 text-gray-700">
                        </div>
                        <div>
                            <label for="venue-name" class="block text-sm font-medium text-gray-700 mb-1">Venue Name</label>
                            <input type="text" id="venue-name" value="The Grand Ballroom" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-rose-500 focus:border-rose-500 text-gray-700">
                        </div>
                        <div class="md:col-span-2">
                            <label for="google-maps-link" class="block text-sm font-medium text-gray-700 mb-1">Google Maps Live Location Link</label>
                            <input type="url" id="google-maps-link" value="https://maps.app.goo.gl/YourWeddingVenue" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-rose-500 focus:border-rose-500 text-gray-700" placeholder="e.g., https://goo.gl/maps/venue">
                        </div>
                    </div>
                </section>

                <!-- Font & Color Selection -->
                <section>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">3. Choose Fonts & Colors</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="font-family" class="block text-sm font-medium text-gray-700 mb-1">Font Style</label>
                            <select id="font-family" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-rose-500 focus:border-rose-500 text-gray-700">
                                <option value="font-inter">Inter</option>
                                <option value="font-dancing-script">Dancing Script</option>
                                <option value="font-playfair-display">Playfair Display</option>
                            </select>
                        </div>
                        <div>
                            <label for="text-color" class="block text-sm font-medium text-gray-700 mb-1">Text Color</label>
                            <div class="flex gap-2 mt-1">
                                <div class="color-box bg-gray-800 selected" data-color="#1f2937"></div>
                                <div class="color-box bg-rose-700" data-color="#be123c"></div>
                                <div class="color-box bg-blue-700" data-color="#1d4ed8"></div>
                                <div class="color-box bg-green-700" data-color="#047857"></div>
                                <div class="color-box bg-purple-700" data-color="#6d28d9"></div>
                                <input type="color" id="custom-text-color" class="w-12 h-10 border border-gray-300 rounded-md cursor-pointer">
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Background/Photo Upload -->
                <section>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">4. Add Your Own Photo (Optional)</h2>
                    <p class="text-gray-600 mb-4">Upload a special photo to be featured on your invitation.</p>
                    <input type="file" id="background-photo-upload" accept="image/*" class="block w-full text-sm text-gray-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-rose-50 file:text-rose-700
                        hover:file:bg-rose-100 cursor-pointer">
                </section>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                    <button id="save-invite-btn" class="px-8 py-3 bg-rose-500 text-white font-bold rounded-lg shadow-md hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                        Save Invitation
                    </button>
                    <button id="preview-invite-btn" class="px-8 py-3 bg-blue-500 text-white font-bold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                        Generate & Preview
                    </button>
                </div>
            </div>

            <!-- Invitation Preview Section -->
            <div class="lg:col-span-1 bg-gradient-to-br from-rose-100 to-pink-100 p-6 rounded-xl shadow-inner flex flex-col justify-center items-center">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Live Preview</h2>
                <div id="invitation-preview" style="background-image: url('https://placehold.co/400x700/fef2f2/be123c?text=Elegant+Bg'); color: #1f2937;">
                    <p id="preview-title" class="text-4xl font-extrabold font-dancing-script text-center preview-text mt-8">You're Invited!</p>
                    <p id="preview-message" class="text-lg font-inter text-center mt-4 preview-text">Join us as we celebrate our wedding day. Your presence is our greatest gift.</p>
                    <div class="mt-auto mb-8 w-full">
                        <p id="preview-date-time" class="text-md font-inter preview-text mb-1">December 25, 2025 at 5:00 PM</p>
                        <p id="preview-venue-name" class="text-lg font-playfair-display font-bold preview-text">The Grand Ballroom</p>
                        <a id="preview-maps-link" href="https://maps.app.goo.gl/YourWeddingVenue" target="_blank" class="text-sm text-blue-500 underline mt-2 block preview-text break-all">View on Map</a>
                    </div>
                </div>

                <!-- Social Sharing (Mock) -->
                <div class="mt-8 text-center">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Share Your Invitation</h3>
                    <div class="flex justify-center gap-4">
                        <button class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
                            Facebook
                        </button>
                        <button class="flex items-center px-4 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600 transition">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M.057 24L1.642 16h3.486L.51 0h8.777l1.986 6.559h-.003L13.791 0h7.625l-2.02 6.559c2.148 2.052 3.262 4.093 3.42 5.067.147.886-.484 2.072-1.854 3.018-.946.666-2.188 1.155-3.327 1.488 1.196.347 2.457.771 3.565 1.258 1.464.646 2.508 1.45 2.766 2.378.22.793-.11 1.704-.98 2.392-.613.482-1.393.844-2.193 1.096-1.07.33-2.147.51-3.218.51-1.09 0-2.176-.174-3.235-.522-1.058-.348-2.012-.864-2.85-1.547-.837-.683-1.488-1.516-1.953-2.488-.465-.972-.73-2.08-.79-3.298h-1.57zm5.556 6.438c.613-.482 1.393-.844 2.193-1.096 1.07-.33 2.147-.51 3.218-.51 1.09 0 2.176.174 3.235.522 1.058.348 2.012.864 2.85 1.547.837.683 1.488 1.516 1.953 2.488.465.972.73 2.08.79 3.298h1.57c.057-2.023-.393-3.76-.79-4.877-.465-1.31-1.52-2.316-3.11-3.018-1.59-.702-3.415-1.098-5.47-1.198V1.002h2.296L11.79 8.002H8.318L6.467 2.002H.057l5.502 17.585zm-.057-23.002V0h-4.32z"></path></svg>
                            WhatsApp
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Preview elements
            const invitationPreview = document.getElementById('invitation-preview');
            const previewTitle = document.getElementById('preview-title');
            const previewMessage = document.getElementById('preview-message');
            const previewDateTime = document.getElementById('preview-date-time');
            const previewVenueName = document.getElementById('preview-venue-name');
            const previewMapsLink = document.getElementById('preview-maps-link');

            // Customization inputs
            const templateSelector = document.getElementById('template-selector');
            const inviteTitleInput = document.getElementById('invite-title');
            const inviteMessageInput = document.getElementById('invite-message');
            const dateTimeInput = document.getElementById('date-time');
            const venueNameInput = document.getElementById('venue-name');
            const googleMapsLinkInput = document.getElementById('google-maps-link');
            const fontFamilySelect = document.getElementById('font-family');
            const textColorContainer = document.querySelector('section:nth-child(3) .flex.gap-2'); // Selects the color boxes div
            const customTextColorInput = document.getElementById('custom-text-color');
            const backgroundPhotoUpload = document.getElementById('background-photo-upload');

            // Action buttons
            const saveInviteBtn = document.getElementById('save-invite-btn');
            const previewInviteBtn = document.getElementById('preview-invite-btn');

            // --- Initial Setup and Template Selection ---
            let currentSelectedTemplateThumbnail = templateSelector.querySelector('.template-thumbnail.selected');

            // Function to apply a template
            const applyTemplate = (thumbnailElement) => {
                // Remove selected class from previous
                if (currentSelectedTemplateThumbnail) {
                    currentSelectedTemplateThumbnail.classList.remove('selected');
                }
                // Add selected class to new one
                thumbnailElement.classList.add('selected');
                currentSelectedTemplateThumbnail = thumbnailElement;

                const bgUrl = thumbnailElement.dataset.templateBg;
                invitationPreview.style.backgroundImage = `url('${bgUrl}')`;
            };

            // Event listener for template selection
            templateSelector.addEventListener('click', (event) => {
                const target = event.target;
                if (target.classList.contains('template-thumbnail')) {
                    applyTemplate(target);
                }
            });

            // Apply initial selected template
            if (currentSelectedTemplateThumbnail) {
                applyTemplate(currentSelectedTemplateThumbnail);
            }

            // --- Text Customization Real-time Update ---
            inviteTitleInput.addEventListener('input', () => {
                previewTitle.textContent = inviteTitleInput.value;
            });

            inviteMessageInput.addEventListener('input', () => {
                previewMessage.textContent = inviteMessageInput.value;
            });

            dateTimeInput.addEventListener('input', () => {
                previewDateTime.textContent = dateTimeInput.value;
            });

            venueNameInput.addEventListener('input', () => {
                previewVenueName.textContent = venueNameInput.value;
            });

            googleMapsLinkInput.addEventListener('input', () => {
                previewMapsLink.href = googleMapsLinkInput.value;
                previewMapsLink.textContent = googleMapsLinkInput.value ? "View on Map" : ""; // Show/hide link text
            });

            // --- Font and Color Customization ---
            fontFamilySelect.addEventListener('change', () => {
                // Remove existing font classes
                previewTitle.classList.remove('font-inter', 'font-dancing-script', 'font-playfair-display');
                previewMessage.classList.remove('font-inter', 'font-dancing-script', 'font-playfair-display');
                previewDateTime.classList.remove('font-inter', 'font-dancing-script', 'font-playfair-display');
                previewVenueName.classList.remove('font-inter', 'font-dancing-script', 'font-playfair-display');

                // Add selected font class
                previewTitle.classList.add(fontFamilySelect.value);
                previewMessage.classList.add(fontFamilySelect.value);
                previewDateTime.classList.add(fontFamilySelect.value);
                previewVenueName.classList.add(fontFamilySelect.value);
            });

            textColorContainer.addEventListener('click', (event) => {
                const target = event.target;
                if (target.classList.contains('color-box')) {
                    // Remove selected class from all color boxes
                    document.querySelectorAll('.color-box').forEach(box => box.classList.remove('selected'));
                    // Add selected class to the clicked box
                    target.classList.add('selected');
                    invitationPreview.style.color = target.dataset.color;
                    customTextColorInput.value = target.dataset.color; // Sync custom color picker
                }
            });

            customTextColorInput.addEventListener('input', () => {
                invitationPreview.style.color = customTextColorInput.value;
                // Deselect all pre-defined color boxes when custom color is picked
                document.querySelectorAll('.color-box').forEach(box => box.classList.remove('selected'));
            });

            // --- Background Photo Upload ---
            backgroundPhotoUpload.addEventListener('change', (event) => {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        invitationPreview.style.backgroundImage = `url('${e.target.result}')`;
                        // Deselect any template thumbnail if a custom background is uploaded
                        if (currentSelectedTemplateThumbnail) {
                            currentSelectedTemplateThumbnail.classList.remove('selected');
                            currentSelectedTemplateThumbnail = null;
                        }
                    };
                    reader.readAsDataURL(file);
                }
            });

            // --- Action Button Handlers (Mock functionality) ---
            saveInviteBtn.addEventListener('click', () => {
                // In a real application, this would save the invitation data to the backend.
                alert('Your invitation has been saved!');
            });

            previewInviteBtn.addEventListener('click', () => {
                // This button would typically trigger a final rendering for sharing or download.
                alert('Generating high-resolution preview and shareable links...');
            });
        });
    </script>
</body>
</html>
