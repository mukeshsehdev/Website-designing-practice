var furniture_Price = 0;
//Shows the street, city, state, and zip information when choosing delivery
function show() {
    if (document.getElementById("delivery").checked) {
        delivery_choose.style.display = "block";
        document.getElementById("street").classList.add("required");
        document.getElementById("city").classList.add("required");
        document.getElementById("state").classList.add("required");
        document.getElementById("zip").classList.add("required");
    }
}
//Hides the street, city, state, and zip information when choosing shipment
function hide() {
    if (document.getElementById("pick-up").checked) {
        delivery_choose.style.display = "none";
        document.getElementById("street").classList.remove("required");
        document.getElementById("city").classList.remove("required");
        document.getElementById("state").classList.remove("required");
        document.getElementById("zip").classList.remove("required");
    }
}

//Shows the special surprise sale
function showsale() {
    if (document.getElementById("saleOn").checked) {
        surprise_choose.style.display = "block";
        document.getElementById("surprise_choose").classList.add("required");
    }
}
//Hides the special surpise sale :(
function hidesale() {
    if (document.getElementById("saleOff").checked) {
        surprise_choose.style.display = "none";
        document.getElementById("surpise_choose").classList.remove("required");
    }
}

function furniture_Choice() {
    var e = document.getElementById("furniture_choices");
    var furniture_choice = e.options[e.selectedIndex].value;
    var furn_id_1 = document.getElementById("big_bank_theory").value;
    var furn_id_2 = document.getElementById("70s_show").value;
    var furn_id_3 = document.getElementById("friends_couch").value;
    var furn_id_4 = document.getElementById("seinfeld_couch").value;
    var furn_id_5 = document.getElementById("game_thrones").value;
    var furn_id_6 = document.getElementById("star_trek").value;
    var furn_id_7 = document.getElementById("men_in_black").value;
    var furn_id_8 = document.getElementById("forrest_gump").value;
    var furn_id_9 = document.getElementById("star_wars").value;
    var furn_id_10 = document.getElementById("throne_of_gondor").value;
    var furn_id_11 = document.getElementById("wayne's_world_couch").value;
    var furn_id_12 = document.getElementById("back_to_future").value;
    var furn_id_13 = document.getElementById("simpsons_couch").value;
    var furn_id_14 = document.getElementById("beavis_couch").value;
    var furn_id_15 = document.getElementById("scooby_doo").value;
    var furn_id_16 = document.getElementById("snoopy_house").value;
    var furn_id_17 = document.getElementById("spongebob_bed").value;
    var furn_id_18 = document.getElementById("flintstone_couch").value;
    var furn_id_19 = document.getElementById("abe_lincoln").value;
    var furn_id_20 = document.getElementById("potus_desk").value;
    var furn_id_21 = document.getElementById("sweden_chair").value;
    var furn_id_22 = document.getElementById("oprah_chair").value;
    var furn_id_23 = document.getElementById("conan_desk").value;
    var furn_id_24 = document.getElementById("queen_chair").value;
    if (furniture_choice == furn_id_1) {
        furniture_Price = 15000;
    }
    if (furniture_choice == furn_id_2){
					furniture_Price = 30000;
				}
				if (furniture_choice == furn_id_3){
					furniture_Price = 50000;
				}
				if (furniture_choice == furn_id_4){
					furniture_Price = 250000;
				}
				if (furniture_choice == furn_id_5){
					furniture_Price = 5000000;
				}
				if (furniture_choice == furn_id_6){
					furniture_Price = 150000;
				}
				if (furniture_choice == furn_id_7){
					furniture_Price = 25000;
				}
				if (furniture_choice == furn_id_8){
					furniture_Price = 400000;
				}
				if (furniture_choice == furn_id_9){
					furniture_Price = 400000;
				}
				if (furniture_choice == furn_id_10){
					furniture_Price = 800000;
				}
				if (furniture_choice == furn_id_11){
					furniture_Price = 25000;
				}
				if (furniture_choice == furn_id_12){
					furniture_Price = 75000;
				}
				if (furniture_choice == furn_id_13){
					furniture_Price = 500000;
				}
				if (furniture_choice == furn_id_14){
					furniture_Price = 10000;
				}
				if (furniture_choice == furn_id_15){
					furniture_Price = 300000;
				}
				if (furniture_choice == furn_id_16){
					furniture_Price = 1000000;
				}
				if (furniture_choice == furn_id_17){
					furniture_Price = 40000;
				}
				if (furniture_choice == furn_id_18){
					furniture_Price = 5000000;
				}
				if (furniture_choice == furn_id_19){
					furniture_Price = 1000000;
				}
				if (furniture_choice == furn_id_20){
					furniture_Price = 999999999;
				}
				if (furniture_choice == furn_id_21){
					furniture_Price = 100000000;
				}
				if (furniture_choice == furn_id_22){
					furniture_Price = 250000;
				}
				if (furniture_choice == furn_id_23){
					furniture_Price = 5000000;
				}
				if (furniture_choice == furn_id_24){
					furniture_Price = 10000000;
				}
    total_Price();
}

function total_Price() {
    var total = furniture_Price;
    document.getElementById("totalPrice").innerHTML ="Total Price = $" + total.toFixed(2);
}
window.onload = function () {
    total_Price();
    mainForm.onsubmit = function (e) {}
}