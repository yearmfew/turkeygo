$(document).ready(function() {
  $("#pdfDownloader").click(function() {

    var doc = new jsPDF('p', 'pt', 'a4', true);

    doc.fromHTML($('#renderMe').get(0), 15, 15, {
      'width': 500
    }, function (dispose) {
    doc.save('turkeygo.pdf');
    });
  });


})

$(document).ready(function() {
  $("#pdfDownloader2").click(function() {

    var doc = new jsPDF('p', 'pt', 'a4', true);

    doc.fromHTML($('#renderMe').get(0), 15, 15, {
      'width': 500
    }, function (dispose) {
    doc.save('turkeygo.pdf');
    });
  });


})


	

/*function gen_picturePDF(){
	html2canvas(document.body, { 
		onrendered: function (canvas){
			var img = canvas.toDataURL("image/png");
			var doc = new jsPDF();
			doc.addImage(img, 'JPEG',20,20);
			doc.save('test.pdf');
		} 
	});
}*/