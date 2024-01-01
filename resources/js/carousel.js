class Carousel {
    constructor(selector) {
        this.parent = document.querySelector(selector);
        
        if (this.parent) {
            this.items = this.parent.querySelectorAll('.slide-item');
            this.iterator = 0;
        }
    }

    start() {
        if (this.items) {
            this.items.forEach(item => {
                item.style.display = 'none';
            })
    
            this.items[this.iterator].style.display = 'block';
    
            setInterval(() => {
                this.next()
            }, 4000);
        }
    }

    next() {
        // Hide current item
        this.items[this.iterator].style.display = 'none';

        // Adding iterator
        this.iterator++;

        // Check
        if (this.iterator == this.items.length) {
            this.iterator = 0;
        }

        this.items[this.iterator].style.display = 'block';
    }

    test() {
        console.log('Iterator:', this.iterator);
    }
}

export default Carousel;