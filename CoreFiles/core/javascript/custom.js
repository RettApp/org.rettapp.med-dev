if (localStorage.getItem("settings") === null) {
	var settings = {};
	settings.startdisclaimer = '0';
	localStorage.setItem("settings", JSON.stringify(settings));
};
function panelAndListRefresh() {
	$('body > [data-role="panel"]').panel();
	$('body > [data-role="panel"] [data-role="listview"]').listview().listview('refresh');
	$('body > [data-role="page"] [data-role="listview"]').listview().listview('refresh');
}
function changeSliderOnSettings(sliderID, sliderIDvalue) {
	$(sliderID+' [value="'+sliderIDvalue+'"]').prop("selected", true);
	$(sliderID).slider().slider("refresh");
}
function calculatePackYears(cigarettes, years){
	result = cigarettes*years/20;
	return result;
}
function kaufrunden(zahl){
	result = Math.round(zahl);
	return result;
}

$(document).on("pageinit", function(){
	panelAndListRefresh();
	$(".med").listview({
	    autodividers: true,
	    autodividersSelector: function (li) {
	        var out = li.attr('divider');
	        return out;
	    }
	}).listview('refresh');
});
$(document).on("pagebeforecreate", "#main-1-disclaimer", function() {
	var settings = JSON.parse(localStorage.getItem('settings'));
	if(settings.startdisclaimer == "1") {
		$.mobile.changePage("#main-2-index");
	};
});
$(document).on("pagebeforeshow", "#other-5-settings", function(event) {
	var settings = JSON.parse(localStorage.getItem('settings'));
	changeSliderOnSettings('#settings-startdisclaimer', settings.startdisclaimer);
});
$(document).on("pageshow", function(event) {
	$("#saveSettings").click(function(){
		var settings = {};
		settings.startdisclaimer = $('#settings-startdisclaimer').val();
		localStorage.setItem("settings", JSON.stringify(settings));
		location.reload(true);
	});
});
$(document).on("pagebeforeshow", function(event){
	activePage = $.mobile.activePage.attr("id");
	$('a.ui-btn-active').removeClass("ui-btn-active");
	$('[href="#'+activePage+'"]').addClass("ui-btn-active");
});

$(document).on("pageshow", "#aid-26", function(event) {
	$("input").change(function() {
	    unityLabel = $("#unity :radio:checked").attr('label');
	    unityValue = $("#unity :radio:checked").val();
	    agentAmount = $("#agent-amount").val();
	    liquidAmount = $('#liquid-amount').val();
	    unityPerKg = $('#unity-per-kg').val();
	    patientWeight = $('#patient-weight').val();
	    
	    if(unityValue === '1'){
	        results = '<b>'+agentAmount+unityLabel+" auf "+liquidAmount+" ml</b><br>";
	        results += agentAmount*1000+'mg'+" auf "+liquidAmount+" ml<br>";
	        results += agentAmount*1000000+'µg'+" auf "+liquidAmount+" ml";
	        $('#doseResultsConditionDefinition').html(results);
	    }else if(unityValue === '1000'){
	        results = agentAmount/1000+"g"+" auf "+liquidAmount+" ml</b><br>";
	        results += '<b>'+agentAmount+unityLabel+" auf "+liquidAmount+" ml</b><br>";
	        results += agentAmount*1000+'µg'+" auf "+liquidAmount+" ml";
	        $('#doseResultsConditionDefinition').html(results);
	    }else if(unityValue === '1000000') {
	        results = agentAmount/1000000+"g auf "+liquidAmount+" ml</b><br>";
	        results += agentAmount/1000+"mg auf "+liquidAmount+" ml<br>";
	        results += '<b>'+agentAmount+unityLabel+" auf "+liquidAmount+" ml<b>";
	        $('#doseResultsConditionDefinition').html(results);
	    }
	    if(unityValue === '1'){
	        results = '<b>'+agentAmount/liquidAmount+' '+unityLabel+'/ml</b><br>';
	        results += agentAmount*1000/liquidAmount+' mg/ml<br>';
	        results += agentAmount*1000000/liquidAmount+' µg/ml';
	        $('#doseResultsCorrespondValue').html(results);
	    }else if(unityValue === '1000'){
	        results = agentAmount/1000/liquidAmount+' g/ml<br>';
	        results += '<b>'+agentAmount/liquidAmount+' '+unityLabel+'/ml</b><br>';
	        results += agentAmount*1000/liquidAmount+' µg/ml';
	        $('#doseResultsCorrespondValue').html(results);
	    }else if(unityValue === '1000000') {
	        results = agentAmount/1000000/liquidAmount+' g/ml<br>';
	        results += agentAmount/1000/liquidAmount+' mg/ml<br>';
	        results += '<b>'+agentAmount/liquidAmount+' '+unityLabel+'/ml</b>';
	        $('#doseResultsCorrespondValue').html(results);
	    }
	    if(unityValue === '1'){
	        correspond = agentAmount*1000/liquidAmount;
	        results = patientWeight*unityPerKg+' mg<br>';
	        results += patientWeight*unityPerKg/correspond+' ml bei aktueller Dosis';
	        $('#doseResultsDoseValue').html(results);
	    }else if(unityValue === '1000'){
	        correspond = agentAmount/liquidAmount;
	        results = patientWeight*unityPerKg+' mg<br>';
	        results += patientWeight*unityPerKg/correspond+' ml bei aktueller Dosis';
	        $('#doseResultsDoseValue').html(results);
	    }else if(unityValue === '1000000') {
	        correspond = agentAmount/1000/liquidAmount;
	        results = patientWeight*unityPerKg+' mg<br>';
	        results += patientWeight*unityPerKg/correspond+' ml bei aktueller Dosis';
	        $('#doseResultsDoseValue').html(results);
	    }
	});
});