$(function () {

    $('.tombolTambahData').on('click', function () {
        $('#title').html('Add Data');
        $('.modal-footer button[type = submit]').html('Add ');
        $('#name').val("")
        $('#work').val("").html("work..")
        $('#salary').val("").html("salary..")
    })

    $('.modalUbah').on('click', function () {
        $('#title').html('Edit Data');
        $('.modal-footer button[type = submit]').html('Edit');

        const id = $(this).data('id');
        const name = $(this).data('name');
        const work = $(this).data('work');
        const idWork = $(this).data('idWork');
        const salary = $(this).data('salary');
        const idSalary = $(this).data('idSalary');

        $('#id').val(id)
        $('#name').val(name)
        $('#work').val(idWork).html(work)
        $('#salary').val(idSalary).html(salary)
    })
})