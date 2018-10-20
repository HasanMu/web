document.getElementById("tombol_p").
    addEventListener("click", tampilkan_nilai_p);
    document.getElementById("sukai").addEventListener("click", method);
     
    function tampilkan_nilai_p() {
        var namauser =document.getElementById("nama-user").innerHTML;
        var nohp =document.getElementById("no-telp").innerHTML;
    }

    
    function method(y){
      var x = document.getElementById("likers").innerHTML = 1;
      var x1 = document.getElementById("sukai"); 
      var y = document.getElementById("batal_suka");
      if(y.style.display === "none"){
          y.style.display = "block";
      }

      if (x1.style.display === "block") {
          x1.style.display = "none";
      }
    }

    function method2(em){
      var x = document.getElementById("likers").innerHTML = 0;
      var em = document.getElementById("batal_suka");
      var x1 = document.getElementById("sukai");
      if(em.style.display === "block"){
          em.style.display = "none";
      }

      if(x1.style.display === "none"){
          x1.style.display = "block";
      }

    }