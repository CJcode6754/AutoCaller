<div class="relative inline-block text-left">
    <div>
        <button type="button"
            class="dropdown-button inline-flex w-85 md:w-60 lg:w-70 justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-500 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50"
            id="dropdown-button" aria-expanded="false" aria-haspopup="true">
            {{ $label }}
            <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                data-slot="icon">
                <path fill-rule="evenodd"
                    d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <div class="dropdown-menu hidden absolute right-0 z-10 mt-2 w-full lg:w-70 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none" 
        role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button" tabindex="-1">
        <div class="py-1" role="none">
            {{ $options }}
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownButtons = document.querySelectorAll('.dropdown-button');
        let activeDropdown = null;

        dropdownButtons.forEach(button => {
            const parent = button.closest('.relative');
            const menu = parent.querySelector('.dropdown-menu');

            button.addEventListener('click', (e) => {
                e.stopPropagation();

                // Close other open dropdown if exists and it's not the current one
                if (activeDropdown && activeDropdown !== menu) {
                    activeDropdown.classList.add('hidden');
                    activeDropdown.previousElementSibling.setAttribute('aria-expanded', 'false');
                }

                // Toggle current menu
                menu.classList.toggle('hidden');
                const isExpanded = !menu.classList.contains('hidden');
                button.setAttribute('aria-expanded', isExpanded);

                activeDropdown = isExpanded ? menu : null;
            });

            // Close when a menu item is clicked
            const options = menu.querySelectorAll('a, button');
            options.forEach(option => {
                option.addEventListener('click', () => {
                    menu.classList.add('hidden');
                    button.setAttribute('aria-expanded', 'false');
                    activeDropdown = null;
                });
            });
        });

        // Global click to close any open dropdown
        document.addEventListener('click', () => {
            if (activeDropdown) {
                activeDropdown.classList.add('hidden');
                activeDropdown.previousElementSibling.setAttribute('aria-expanded', 'false');
                activeDropdown = null;
            }
        });
    });
</script>
