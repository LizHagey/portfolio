function style1 () {
    table = document.getElementById("table");
    th = document.getElementById("tableHead");
    
    table.className = "tableStyle1";
    th.className = "thStyle1";
}

function style2() {
    table = document.getElementById("table");
    th = document.getElementById("tableHead");
   
    table.className = "tableStyle2";
    th.className = "thStyle2";
 }

function style3 () {
   Htest = document.getElementById("test");
   Htest.className = "testStyle";
}

function change(){
    this.style.color = "yellow"
}

//Slide in functions
/*Interactivity to determine when an animated element in in view. In view elements trigger our animation*/
$(document).ready(function() {

  //window and animation items
  var animation_elements = $.find('.animation-element');
  var web_window = $(window);

  //check to see if any animation containers are currently in view
  function check_if_in_view() {
    //get current window information
    var window_height = web_window.height();
    var window_top_position = web_window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    //iterate through elements to see if its in view
    $.each(animation_elements, function() {

      //get the element sinformation
      var element = $(this);
      var element_height = $(element).outerHeight();
      var element_top_position = $(element).offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is visible (its viewable if it exists between the viewable space of the viewport)
      if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
        element.addClass('in-view');
      } else {
        element.removeClass('in-view');
      }
    });

  }

  //on or scroll, detect elements in view
  $(window).on('scroll resize', function() {
      check_if_in_view()
    })
    //trigger our scroll event on initial load
  $(window).trigger('scroll');

});

//document.getElementById("highlight").addeventlistener("onmouseover", change);
//document.getElementById("highlight").addeventlistener("onmouseout", change);

      /* Input: User to input: 
	   * 1. Amount borrowed (principal)
	   * 2. Annual interest rate
	   * 3. Number of years
	   * 4. Payments per year
       * Processing: Call payment
       * Output: Amount of payment
       */
	   
	   function doPayment() {
		var principal = parseFloat(document.getElementById("Borrowed").value);
		var annualRate = parseFloat(document.getElementById("rate").value);
		var years = parseFloat(document.getElementById("numYears").value);
		var periodsPerYear = parseFloat(document.getElementById("payPerYear").value);
		var payment = computePayment (principal, annualRate, years, periodsPerYear);
		document.getElementById("outputPayment").innerHTML = payment;
	   }
	   
	    /* Input: User to input: 
	   * 1. Amount borrowed (principal)
	   * 2. Annual interest rate
	   * 3. Number of years
	   * 4. Payments per year
	   * 5. Number of payments paid to date
       * Processing: Call payoff
       * Output: payoff amount
       */
	   
	   function doBalance() {
		var principal = parseFloat(document.getElementById("Borrowed").value);
		var annualRate = parseFloat(document.getElementById("rate").value);
		var years = parseFloat(document.getElementById("numYears").value);
		var periodsPerYear = parseFloat(document.getElementById("payPerYear").value);
		var numberPaidToDate = parseFloat (document.getElementById("numDate").value);
		var payoff = computeBalance (principal, annualRate, years, periodsPerYear, numberPaidToDate);
		document.getElementById("outputBalance").innerHTML = payoff;
	   }
	   
	   /* Input: Information from doPayment
       * Processing: 
	   * 1. compute the rate per period
	   * 2. compute the number of pay periods 
	   * 3. compute the exponent
	   * 4. compute the payment
	   * 5. round payment
       * Output: payment sent to doPayment.
       */
	   function computePayment (principal, annualRate, years, periodsPerYear) {
		var r = annualRate / periodsPerYear;
		var n = years * periodsPerYear;
		var x = Math.pow((1 + r), -n);
		var pay = principal * r / (1 - x);
		payment = Math.round(pay*100)/ 100;
		return payment;
	   }
	   
	   /* Input: Information from doBalance & payment
       * Processing: 
	   * 1. compute the rate per period
	   * 2. compute the number of pay periods 
	   * 3. compute the exponent
	   * 4. bring in the payment
	   * 5. compute payoff amount
	   * 6. round payoff
       * Output: payoff sent to doBalance.
       */
	   function computeBalance (principal, annualRate, years, periodsPerYear, numberPaidToDate) {
		var r = annualRate / periodsPerYear;
		var n = years * periodsPerYear;
		var payment = computePayment (principal, annualRate, years, periodsPerYear);
		var exp = Math.pow((1 + r), numberPaidToDate);
		var p = (principal * exp) - (payment * (exp - 1) / r);
		payoff = Math.round(p*100)/ 100;
		return payoff;
	   }
           
// Random Stars
var generateStars = function(){
    
    var $galaxy = $(".galaxy");
    var iterator = 0;
    
    while (iterator <= 100){
        var xposition = Math.random();
        var yposition = Math.random();
        var star_type = Math.floor((Math.random() * 3) + 1);
        var position = {
            "x" : $galaxy.width() * xposition,
            "y" : $galaxy.height() * yposition,
        };
        
        $('<div class="star star-type' + star_type + '"></div>').appendTo($galaxy).css({
            "top" : position.y,
            "left" : position.x
        });
        
        iterator++;
    }
    
};

generateStars();