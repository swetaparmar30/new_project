<?php $__env->startSection('main_content'); ?>
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->

                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row ">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card Recent-Users mb-4">
                                    <div class="card-header">
                                        <h5>Newsletters</h5>

                                        <a href="<?php echo e(route('newsletters-add')); ?>" class="add-article-btn">Add Newsletter</a>
                                    </div>
                                    <div class="card-block px-0 py-3">
                                        <div class="table-responsive" role="tabpanel" id="">
                                            <table class="table table-hover" id="myTable" style="width:100%">
                                                <thead>
                                                    <tr class="unread">
                                                        <th scope="col">#</th>
                                                        <th scope="col">image</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Author</th>
                                                        <th scope="col">Enable/Disable</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
$(document).ready(function() {

    var token = $("meta[name='csrf-token']").attr("content");

    var table = $('#myTable').DataTable({
        language: {
            search: "",
            searchPlaceholder: "Search",
            processing: '<i class="fa fa-spinner fa-spin" style="font-size:24px;color:#4bb7f5;"></i>',
            paginate: {
                next: '>',
                previous: '<'
            }
        },

        processing: true,
        autoWidth: false,

        columnDefs: [
            { 
                targets: [0,4,5],
                orderable: false
            },
            { width: '5%', targets: 0 },
            { width: '15%', targets: 1 },
            { width: '20%', targets: 2 },
            { width: '25%', targets: 3 },
            { width: '15%', targets: 4 },
            { width: '20%', targets: 5 },

            // ✅ ADD THIS BLOCK (IMPORTANT)
            {
                targets: [1,4,5], // image, status, action
                render: function (data, type, row) {
                    return data; // allow HTML
                }
            }
        ],

        ajax: {
            url: "<?php echo e(route('list-newsletters')); ?>",
            type: "GET", 
            data: {
                _token: token
            }
        },

        columns: [
            { data: 'sec_id', name: 'sec_id' },
            { data: 'image', name: 'image' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action' }
        ]

    });

});
</script>

<script>
$(document).on('change', '.is_featured_class', function () {

    let id = $(this).data('id');
    let status = $(this).is(':checked') ? 1 : 0;

    $.ajax({
        url: "<?php echo e(route('newsletters.status')); ?>",
        type: "POST",
        data: {
            _token: "<?php echo e(csrf_token()); ?>",
            id: id,
            status: status
        },
        success: function (res) {
            console.log('Status updated');
        }
    });

});
</script>


<script>
$(document).on('click', '.product_delete', function (e) {
    e.preventDefault();

    let url = $(this).attr('href');

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't delete this record!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {

        if (result.isConfirmed) {

            $.ajax({
                url: url,
                type: "GET",
                success: function (res) {

                    if (res.status) {
                        Swal.fire('Deleted!', res.message, 'success');
                        $('#myTable').DataTable().ajax.reload();
                    }
                }
            });

        }
    });
});
</script>
<?php $__env->stopSection(); ?>



 
           
<?php echo $__env->make('layouts.backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\new_project\resources\views/newsletters/index.blade.php ENDPATH**/ ?>