function angka(num)
      {
        document.form.monitor.value = document.form.monitor.value + num;
      }

      function hitung ()
      {
        var hasil = document.form.monitor.value;
        document.form.monitor.value = eval(hasil);
      }
      function hapus()
      {
        var hasil = document.form.monitor.value;
	    document.form.monitor.value = hasil.substring(0,hasil.length-1);
      }