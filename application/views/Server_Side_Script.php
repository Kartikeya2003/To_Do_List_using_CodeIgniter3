 <?php
    // $data = array();
    // foreach($tasks as $x=>$y) {
    //     $data[] = array(
    //         "Task Name" => $y['Task'],
    //         "Due Date" => $y['Due_Date'],
    //         "Email" => $y['Email'],
    //         "Status" => $y['Status'],
    //     ); 
    // }
     ?>

     <!-- Added CDN links for -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.jqueryui.min.js"></script>
    <script src="https://cdn.datatables.net/scroller/2.1.1/js/dataTables.scroller.min.js"></script>
    <script>
            $(document).ready(function() {
            $('#table').DataTable();
            });
    </script>