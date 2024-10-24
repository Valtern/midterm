$(document).ready(function() {
    $("#priceForm").submit(function(event) {
        event.preventDefault();

        let weight = parseFloat($("#weight").val());
        let servicePrice = parseFloat($("#service").val());
        let typePrice = parseFloat($("#type").val());
        let discount = parseFloat($("#discount").val());

        let totalPrice = weight * (servicePrice + typePrice);
        let discountAmount = totalPrice * discount;
        let finalPrice = totalPrice - discountAmount;

        let priceColor = discountAmount > 0 ? "green" : "red"; 

        $(".price-result").html("Total Price: <span style='color:" + priceColor + ";'>" + finalPrice.toFixed(2) + "</span>");
    });

    $("#logoutButton").click(function() {
        window.location.href = "index.php";
    });
});