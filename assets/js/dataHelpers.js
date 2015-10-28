//Retrieve the countries in ajax and return an array of value
//The selectType change the value key : 
//for select input : {"value":"FR", "text":"France"}
//for select2 input : {"id":"FR", "text":"France"}
function getCountries(selectType) {
	var result = new Array();
	$.ajax({
		url: baseUrl+'/'+moduleId+"/opendata/getcountries",
		type: 'post',
		global: false,
		async: false,
		dataType: 'json',
		success: function(data) {
			$.each(data, function(i,value) {
				if (selectType == "select2") {
					result.push({"id" : value.value, "text" :value.text});
				} else {
					result.push({"value" : value.value, "text" :value.text});
				}
			}) 
		}
	});
	return result;
}

function formatDataForSelect(data, selectType) {
	var result = new Array();
	$.each(data, function(key,value) {
		if (selectType == "select2") {
			result.push({"id" : key, "text" :value});
		} else {
			result.push({"value" : key, "text" :value});
		}
	});
	return result;
}

function getCitiesByPostalCode(postalCode, selectType) {
	var result =new Array();
	$.ajax({
		url: baseUrl+'/'+moduleId+"/opendata/getcitiesbypostalcode/",
		data: {postalCode: postalCode},
		type: 'post',
		global: false,
		async: false,
		dataType: 'json',
		success: function(data) {
			$.each(data, function(key,value) {
				if (selectType == "select2") {
					result.push({"id" : value.insee, "text" :value.alternateName});
				} else {
					result.push({"value" : value.insee, "text" :value.alternateName});
				}
			});
		}
	});
	return result;
}

/** added by tristan **/
function getCitiesGeoPosByPostalCode(postalCode, selectType) {
	var result =new Array();
	$.ajax({
		url: baseUrl+'/'+moduleId+"/opendata/getcitiesgeoposbypostalcode/",
		data: {postalCode: postalCode},
		type: 'post',
		global: false,
		async: false,
		dataType: 'json',
		success: function(data) { console.dir(data);
			result.push(data);
		}
	});
	return result;
}

function addCustomValidators() {
	//Validate a postalCode
	jQuery.validator.addMethod("validPostalCode", function(value, element) {
	    var response;
	    $.ajax({
			url: baseUrl+'/'+moduleId+"/opendata/getcitiesbypostalcode/",
			data: {postalCode: value},
			type: 'post',
			global: false,
			async: false,
			dataType: 'json',
			success: function(data) {
			    response = data;
			}
		});
	    if (Object.keys(response).length > 0) {
	    	return true;
	    } else {
	    	return false;
	    }
	}, "Unknown Postal Code");
}
