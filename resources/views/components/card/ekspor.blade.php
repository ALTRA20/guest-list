<style>
.cardEksporForm{
  margin-left: 15px;
}
.cardEksporFormList{
  display: block;
  cursor: pointer;
  width: fit-content;
/*  padding: 0 5px;*/
}
.cardEksporFormListLogo{
  width: 60px;
}
</style>
<div class="cardEkspor modal fade" id="ekspor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:black!important;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="cardEksporTop modal-header border-0">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Ekspor Data</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="cardEksporBody modal-body">
              <span class="">ekspor data ke</span>
              <form class="cardEksporForm">
                <label class="cardEksporFormList" onclick="convertExcel()">
                  <img src="{{asset('excel.png')}}" alt="" class="cardEksporFormListLogo">
                  excel
                </label>
                <label class="cardEksporFormList">
                  <img src="{{asset('pdf.webp')}}" alt="" class="cardEksporFormListLogo">
                  pdf
                </label>
              </form>
            </div>
          </div>
        </div>
      </div>
<!-- ekspor to excel -->
<!-- Memasukkan library SheetJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
<script type="text/javascript">
  const convertExcel = () => {
    // Mengambil data dari tabel HTML
  var table = document.getElementById("daftarTamu");
  var rows = table.getElementsByTagName("tr");
  var data = [];

  // Menambahkan nilai kolom th sebagai elemen pertama pada setiap baris data
  var firstRow = [];
  var ths = rows[0].getElementsByTagName("th");
  for (var i = 0; i < ths.length-1; i++) {
      firstRow.push(ths[i].textContent);
  }
  data.push(firstRow);

  // Menambahkan data dari elemen td ke setiap baris data
  for (var i = 0; i < rows.length; i++) {
      var row = rows[i];
      var cols = row.getElementsByTagName("td");
      var rowData = [];
      for (var j = 0; j < cols.length-1; j++) {
          rowData.push(cols[j].textContent);
      }
      data.push(rowData);
  }

  // Membuat workbook Excel menggunakan SheetJS
  var workbook = XLSX.utils.book_new();
  var worksheet = XLSX.utils.aoa_to_sheet(data);
  XLSX.utils.book_append_sheet(workbook, worksheet, "Sheet1");

  // Mengeksport data ke file Excel
  XLSX.writeFile(workbook, "daftarTamu.xlsx");

  }

</script>