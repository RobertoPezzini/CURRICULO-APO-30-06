$(document).ready(function () {
    $('#add-experience').click(function () {
        $('#experience-container').append(`
            <div class="experience-item mb-3">
                <textarea name="experience[]" class="form-control" rows="3" required></textarea>
                <button type="button" class="btn btn-danger remove-experience">- Remover</button>
            </div>
        `);
    });

    $('#experience-container').on('click', '.remove-experience', function () {
        $(this).closest('.experience-item').remove();
    });

    $('#add-reference').click(function () {
        $('#reference-container').append(`
            <div class="reference-item mb-3">
                <input type="text" name="references[]" class="form-control" placeholder="Nome da Referência" required>
                <button type="button" class="btn btn-danger remove-reference">- Remover</button>
            </div>
        `);
    });

    $('#reference-container').on('click', '.remove-reference', function () {
        $(this).closest('.reference-item').remove();
    });
});
