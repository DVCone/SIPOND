<section class="content">
   <div class="container-fluid">
      <span>File</span>
      <input type="file" name="file" idd="file">
      <button type="button" name="uploadButton" id="uploadButton">Upload</button>
   </div>
</section>

<script>
   $(document).ready(function() {
      $('#uploadButton').click(function() {
         var filename= $('#file').val();

         $.ajax({
            type: "POST",
            url:"<?php echo base_url();?>index.php/nilai2/upload",
            enctype: 'multipart/form-data',
            data: 'file='+filename,
            success:function(res){
               document.getElementById("formkategori").reset();
               swal("Selamat!", "Data Anda Sudah Tersimpan!", "success");
            }
         })
      })
   })
</script>
