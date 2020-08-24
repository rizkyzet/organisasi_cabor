$(document).ready(function () {
	let html = $("#1").html();
	let i = 1;

	$(".btn_tambah").on("click", function () {


		i++;

		$(".pengurus").append(
			'<div class="pengurus_row form-group  d-flex flex-row" id="' + i + '">' + html + "</div>"
		);

		$('#' + i + '>.btn_hapus').attr('disabled', false);
		$('#' + i + '>.btn_hapus').attr('id', i);
	});




});

$(document).ready(function () {

	$(document).on('click', '.btn_hapus', function () {
		let id = $(this).attr('id');
		console.log(id);
		$('.pengurus_row#' + id).remove();

	})
})