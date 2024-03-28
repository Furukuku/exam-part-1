<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Assigments <?= count($assignments) > 5 ? "- showing " . count($assignments) . " rows" : "" ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <main class="container py-5">
        <p class="fs-2">All Assignments</p>
        <table class="table table-striped table-bordered">
            <thead class="table-secondary">
                <tr>
                    <th>Assignment</th>
                    <th>Sequence num</th>
                    <th>Level</th>
                    <th>Track</th>
                </tr>
            </thead>
            <tbody>
<?php
                foreach ($assignments as $assignment) {
?>
                <tr>
                    <td><?= $assignment["name"]; ?></td>
                    <td><?= $assignment["sequence_num"]; ?></td>
                    <td><?= $assignment["level"]; ?></td>
                    <td><?= $assignment["track"]; ?></td>
                </tr>
<?php
                }
?>
            </tbody>
        </table>
        <a href="<?= site_url("assignments/{$show_more}"); ?>" class="btn btn-success w-100 mt-5">Show more</a>
    </main>
</body>
</html>