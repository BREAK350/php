function load(php, lab) {
	location.href = "?lab=" + lab;
}
function validForm(form) {
	brand = form.brand.value;
	model = form.model.value;
	year = form.year.value;
	price = form.price.value;
	date = form.date.value;
	buyer = form.buyer.value;

	if (brand == null || brand == "" || model == null || model == ""
			|| year == null || year == "" || price == null || price == ""
			|| date == null || date == "" || buyer == null || buyer == "") {
		alert("Incorrect data");
	} else {
		form.submit();
	}
}