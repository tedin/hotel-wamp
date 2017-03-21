function infoSoba(broj) {
    var dataToSend = ({brojSobe: broj});
    $.ajax({
      type: "POST",
      url: "/sobeController.php",
      data: dataToSend,
      success: function(data){
        var obj = data;
        //var recvd = JSON.stringify(obj);
        var novi = JSON.parse(data);
        //var nes = JSON.parse(novi)
        ///alert('primljeno' + nes);
        console.log(novi.BrSobe);
        console.log(novi[2]);
        // KAO RESPONSE VRATI CITAV RED SA TOM SOBOM
        $('#info-modal').modal('show');
        $('#info-modal-body').text(novi.BrSobe);
        $('#info-modal-footer').html('<button class="dugme">Check in</button>');
      },
      error: function(data){
        alert('nije poslano' + data);
        console.log(data);
      }
    });
}
