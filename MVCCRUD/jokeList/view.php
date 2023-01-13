<?php
    include_once '../model/jokeList.php';
    $all_jokes = new Joke();
    $jokes = $all_jokes->allJokes();
?>
<table id="data-table" class="display dataTable" style="width: 100%" aria-describedby="example_info">
    <thead>
        <tr>
            <th>Text</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($jokes as $joke) {
        ?>
            <tr class="odd"  id = "<?= $joke['id']; ?>"  text = "<?=$joke['text']; ?>">
                <td class="sorting_1"><?= $joke['text'] ?></td>
                <td>
                    <div class="d-flex fs-3">
                        <button type="button" class="btn btn-warning me-3" data-toggle="modal" data-target="#modal-joke" onclick="editJoke(<?= $joke['id'] ?>)">
                            <i class="bi bi-pencil-square users-icon"></i>
                        </button>
                        <a href="../jokeList/controller.php?id=<?= $joke['id'] ?>" class="btn btn-danger text-dark"><i class="bi bi-trash3-fill users-icon"></i></a>
                    </div>
                </td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>
<script src="../assets/js/main.js"></script>