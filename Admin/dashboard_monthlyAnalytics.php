<div class="small-box p-3">
    <?php 


      // 1.
      // DISPLAY ALL DATA IN EACH DAY
      $data = mysqli_query($conn, "SELECT
                DATE_FORMAT(date_of_exam, '%Y-%m') AS exam_month,
                COUNT(*) AS total_count,
                SUM(CASE WHEN total >= 135 THEN 1 ELSE 0 END) AS passed_count,
                SUM(CASE WHEN total < 135 THEN 1 ELSE 0 END) AS failed_count
            FROM
                exam
            WHERE
                date_of_exam >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
            GROUP BY
                DATE_FORMAT(date_of_exam, '%Y-%m')");


      // Store the data in a multidimensional array called $data
      // Define the labels for the X-axis (exam dates)
        $labels = array();
        foreach ($data as $row) {
            // $labels[] = $row['exam_month'];
            $labels[] = date("F", strtotime($row['exam_month']));
        }

        // Define the data for the Y-axis (number of users passed/failed)
        $passed_data = array();
        $failed_data = array();
        foreach ($data as $row) {
            $passed_data[] = $row['passed_count'];
            $failed_data[] = $row['failed_count'];
        }

        // Define the chart data as a PHP array
        $chart_data = array(
            'labels' => $labels,
            'datasets' => array(
                array(
                    'label' => 'Passed',
                    'data' => $passed_data,
                    'backgroundColor' => 'green'
                ),
                array(
                    'label' => 'Failed',
                    'data' => $failed_data,
                    'backgroundColor' => 'red'
                )
            )
        );

        // Encode the chart data as a JSON string
        $chart_data_json = json_encode($chart_data);

        // Output the chart HTML and JavaScript
        echo '<canvas id="exam-chart"></canvas>';
        echo '<script>';
        echo 'var chartData = ' . $chart_data_json . ';';
        echo 'var ctx = document.getElementById("exam-chart").getContext("2d");';
        echo 'var examChart = new Chart(ctx, { type: "bar", data: chartData });';
        echo '</script>';
    ?>
</div>