<?php
include 'views/header.php';
include 'inc/names.php';
include 'inc/functions.php';

$currentName = $_GET['name'];

$namesFiltered = [];
foreach($names AS $nameArray) {
    if ($nameArray['name'] !== $currentName) {
        continue;
    }
    $namesFiltered[] = $nameArray;
}

?>

<?php if(!empty($namesFiltered)): ?>
    <h2>Geburtsstatistiken für <?php echo e($currentName); ?></h2>

    <?php
        $chartYears=[];
        $chartCounts=[];
        //alle Daten anschauen und unter 'year' dann alle Jahre anzeigen und in der chartYears abspeichern
        foreach($namesFiltered as $nameArray) {
            $chartYears[] = $nameArray['year'];
            $chartCounts[] = $nameArray['count'];
            // Jetzt fehlt nur noch die Datenpunkte für die Diagramzuordnung noch zuzuordnen | diese werden am besten mit dem 'count' zusammengesetzt da beides die Anzahl anzeigt
        }
    ?>

    <script type="text/javascript" src="scripts/chart.js"></script>
    <div>
        <canvas id="myChart" width="200" height="100"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($chartYears); ?>/*['2000', '2001', '2002', '2003', '2004', '2005']*/,
                datasets: [{
                    label: '# of Babies',
                    data: <?php echo json_encode($chartCounts); ?>, /*[12, 19, 3, 5, 2, 3],*/
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

    <table>
        <thead>
        <tr>
            <th>Jahr</th>
            <th>Anzahl Geburten</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($namesFiltered AS $nameArray): ?>
            <tr>
                <td><?php echo $nameArray['year']; ?></td>
                <td><?php echo $nameArray['count']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<?php

include 'views/footer.php';
?>