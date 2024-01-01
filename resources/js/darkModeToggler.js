class DarkModeToggler {
    constructor(selector, darkMode) {
        this.elements = document.querySelectorAll(selector);
        this.darkMode = darkMode;
    }
    start() {
        if (this.elements.length) {
            var instance = this;

            this.elements.forEach(el => {
                var input = el.querySelector('input');

                input.checked = instance.darkMode.isDarkMode;                        
                input.addEventListener('change', function () {
                    instance.darkMode.setDarkMode(this.checked).save();
                });
            });
        }
    }
}

export default DarkModeToggler;