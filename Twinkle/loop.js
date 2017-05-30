var limit = 80, // Max number of stars
    body = document.getElementById("effect");
loop = {
    //initilizing
    start: function() {
        for (var i = 0; i <= limit; i++) {
            var star = this.newStar();
            star.style.top = this.rand() * 80 + "%";
            star.style.left = this.rand() * 80 + "%";
            star.style.color = this.color() * 80 + "%";
            star.style.webkitAnimationDelay = this.rand() + "s";
            star.style.mozAnimationDelay = this.rand() + "s";
            body.appendChild(star);
        };
    },
    //to get random number
    rand: function() {
        return Math.random();
    },
    color: function() {
        var colors = ['red', 'green', 'blue', 'orange', 'yellow'];

        return colors[Math.floor(Math.random() * colors.length)];
    },
    //creating html dom for star
    newStar: function() {
        var d = document.createElement('div');
        d.innerHTML = '<figure class="star"><figure class="star-top"></figure><figure class="star-bottom"></figure></figure>';
        return d.firstChild;
    },
    
};
loop.start();

