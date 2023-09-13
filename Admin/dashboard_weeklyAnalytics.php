<div class="small-box p-3">
    <?php 


      // 1.
      // DISPLAY ALL DATA IN EACH DAY
      $data = mysqli_query($conn, "SELECT
                CONCAT(YEAR(date_of_exam), '-W', WEEK(date_of_exam)) AS exam_week,
                COUNT(*) AS total_count,
                SUM(CASE WHEN total >= 135 THEN 1 ELSE 0 END) AS passed_count,
                SUM(CASE WHEN total < 135 THEN 1 ELSE 0 END) AS failed_count
            FROM
                exam
            WHERE
                date_of_exam >= DATE_SUB(CURDATE(), INTERVAL 21 DAY)
            GROUP BY
                CONCAT(YEAR(date_of_exam), '-W', WEEK(date_of_exam))");


      // 2.
      // DISPLAY DATA BY THREE DAYS INTERVAL
      // $data = mysqli_query($conn, "SELECT
      //     DATE(date_of_exam) AS exam_date,
      //     COUNT(*) AS total_count,
      //     SUM(CASE WHEN total >= 135 THEN 1 ELSE 0 END) AS passed_count,
      //     SUM(CASE WHEN total < 135 THEN 1 ELSE 0 END) AS failed_count
      // FROM
      //     exam
      // WHERE
      //     date_of_exam >= DATE_SUB(CURDATE(), INTERVAL 3 DAY)
      // GROUP BY
      //     DATE(date_of_exam)");


      // Store the data in a multidimensional array called $data
      // Define the labels for the X-axis (exam dates)
        $labels = array();
        foreach ($data as $row) {
            $labels[] = 'Week ' . substr($row['exam_week'], -2);
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