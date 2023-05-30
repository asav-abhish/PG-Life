<script>
  function printContent(el) {
    var allpages=document.body.innerHTML;
    var printpage=document.getElementById(el).innerHTML;
    document.body.innerHTML=printpage;
    window.print();
    document.body.innerHTML=allpages;
  }
</script>
