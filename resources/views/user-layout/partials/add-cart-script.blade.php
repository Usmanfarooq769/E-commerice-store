<script>

function loadHeaderCart() {
    $.get(window.Laravel.cartHeaderUrl, function(res) {

        const count = res.count;

        $('#cart-icon-badge').text(count);
        $('#cart-data').text(count + ' Item' + (count != 1 ? 's' : ''));

        const $list = $('#header-cart-items-scroll').empty();
        const $footer = $('.empty-header-item');
        const $empty = $('.empty-item');

        // 🔥 RESET BOTH STATES FIRST (VERY IMPORTANT)
        $footer.addClass('d-none');
        $empty.addClass('d-none');

        // 👉 IF EMPTY CART
        if (!res.items || res.items.length === 0) {
            $empty.removeClass('d-none');
            return;
        }

        // 👉 IF HAS ITEMS
        $footer.removeClass('d-none');

        res.items.forEach(item => {
            $list.append(`
                <li class="dropdown-item">
                    <div class="d-flex align-items-center gap-3">

                        <div class="lh-1">
                            <span class="avatar avatar-lg bg-light">
                                <img src="${item.image}" alt="${item.name}">
                            </span>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-medium">
                                ${item.name}
                            </div>
                            <span class="text-muted fs-12">${item.category}</span>
                            <div class="fs-11">
                                Qty: ${item.qty}
                            </div>
                        </div>

                        <div class="text-end">
                            <a href="javascript:void(0);"
                               class="remove-header-cart"
                               data-id="${item.id}">
                                <i class="ti ti-trash"></i>
                            </a>
                            <div class="fw-semibold">
                                PKR ${item.price}
                            </div>
                        </div>

                    </div>
                </li>
            `);
        });

    });
}

// Load cart on page load
loadHeaderCart();


// ADD TO CART
$(document).on('click', '.add-to-cart-btn', function () {

    const productId = $(this).data('id');
    const qty = 1;

    $.ajax({
        url: window.Laravel.addToCartUrl,
        method: 'POST',
        data: {
            _token: window.Laravel.csrfToken,
            product_id: productId,
            quantity: qty
        },
        success(res) {
            $('#cart-icon-badge').text(res.count);
            loadHeaderCart();

            Swal.fire({
                icon: 'success',
                title: res.message,
                toast: true,
                position: 'top-end',
                timer: 1500,
                showConfirmButton: false
            });
        }
    });
});


// REMOVE ITEM
$(document).on('click', '.remove-header-cart', function () {

    const id = $(this).data('id');

    $.ajax({
        url: window.Laravel.cartRemoveBase + '/' + id,
        method: 'DELETE',
        data: {
            _token: window.Laravel.csrfToken
        },
        success() {
            loadHeaderCart();
        }
    });
});
</script>

<style>
    #header-cart-items-scroll {
    max-height: 300px;   /* important */
    overflow-y: auto;
    overflow-x: hidden;
}
</style>