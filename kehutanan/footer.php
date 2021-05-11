</main>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="./css-js/js/popper.min.js"></script>
<script src="./css-js/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="./css-js/js/holder.min.js"></script>
<script>
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    function startTime() {
        var today = new Date();
        var hr = today.getHours();
        var min = today.getMinutes();
        var sec = today.getSeconds();
        ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
        hr = (hr == 0) ? 12 : hr;
        hr = (hr > 12) ? hr - 12 : hr;
        //Add a zero in front of numbers<10
        hr = checkTime(hr);
        min = checkTime(min);
        sec = checkTime(sec);
        document.getElementById("clock_template").innerHTML = hr + ":" + min + ":" + sec + " " + ap;

        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        var curWeekDay = days[today.getDay()];
        var curDay = today.getDate();
        var curMonth = months[today.getMonth()];
        var curYear = today.getFullYear();
        var date = curWeekDay + ", " + curDay + " " + curMonth + " " + curYear + " /";
        document.getElementById("date_template").innerHTML = date;

        var time = setTimeout(function() {
            startTime()
        }, 500);
    }
    startTime();

    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
</body>

</html>