<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/datatable.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<!-- DataTables Buttons CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
<!-- DataTables Buttons JS -->
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
<!-- JSZip for Excel export -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<!-- pdfmake for PDF export -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>

<script>
    $(document).ready(function() {

        $('#lastStudent').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf'
            ],
            responsive: true,

            language: {
                search: "_INPUT_",
                searchPlaceholder: "بحث",
                lengthMenu: "_MENU_",
                paginate: {
                    first: "الأول",
                    last: "الأخير",
                    next: "التالي",
                    previous: "السابق",
                },
            },
        });
        $(window).resize(function () {
            if ($(window).width() <= 500) {
                table.columns.adjust().draw();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {

        $('#lastBook').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf'
            ],
            responsive: true,

            language: {
                search: "_INPUT_",
                searchPlaceholder: "بحث",
                lengthMenu: "_MENU_",
                paginate: {
                    first: "الأول",
                    last: "الأخير",
                    next: "التالي",
                    previous: "السابق",
                },
            },
        });
        $(window).resize(function () {
            if ($(window).width() <= 500) {
                table.columns.adjust().draw();
            }
        });
    });
</script>
<script>
    var lineChart = document.getElementById('lineChart').getContext('2d');
    var lineChart = new Chart(lineChart, {
        type: 'line',
        data: {
            labels: ['كتاب 1','كتاب 2','كتاب 3','كتاب 4','كتاب 5','كتاب 6','كتاب 7',],
            Height: 30,
            datasets: [{
                label: 'المواد التفاعلية',
                data: [12, 19,2,15,18,16,14],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    var lineChartStudent = document.getElementById('lineChartStudent').getContext('2d');
    var lineChartStudent = new Chart(lineChartStudent, {
        type: 'line',
        data: {
            labels: ['كتاب 1','كتاب 2','كتاب 3','كتاب 4','كتاب 5','كتاب 6','كتاب 7',],
            Height: 30,
            datasets: [{
                label: 'الطلاب',
                data: [1, 20,8,18,19,2,4],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
