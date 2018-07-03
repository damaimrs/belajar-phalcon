
function calendar () {
    $("#datetimepicker4").datetimepicker();
}
function submitData () {
	let dateTime = $("#datetimepicker4").datetimepicker().viewDate;
	console.log(dateTime);
}