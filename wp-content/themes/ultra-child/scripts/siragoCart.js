var productsQty = [];
var a = 0;
var checkIt = false;
var promo = "";

function save_id(product,qty) {
	if(qty>0 || qty!=""){
		jQuery.each(productsQty, function(index, value) { 
		  if (product == value["sku"]) {
			value["qty"] = qty;
			checkIt = true;
		  }
		 });
		 
		if (checkIt == false) {
			productsQty[a] = [];
			productsQty[a]["sku"] = product;
			productsQty[a]["qty"] = qty;
			a++;
		}
		
		checkIt = false;
	}
	
}

function submitProducts() {
	var productString = "";
	
	if(productsQty.length>0){
		jQuery.each(productsQty, function(index, value) {
		if (productString.length > 0) {
			productString = productString + value["sku"] + "," + value["qty"] + "|"; 
		} else {
			productString = value["sku"] + "," + value["qty"] + "|"; 
		}
		});
		
		//window.location = "http://www.zymoresearch.com/nicktest?q="+productString;
		
		
		if(promo==""){
			window.open("http://www.zymoresearch.com/nicktest?q="+productString, "_blank");
		} else if(promo!=""){
			window.location = "http://www.zymoresearch.com/nicktest?q="+productString+"&coupon_code="+promo;
		}
	}else{
		var answer = confirm ("Please add an item to your cart");
		if (answer){
			window.location="#";
		}
	}
}