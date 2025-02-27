import Swal from "sweetalert2";

export function showSuccess(message) {
    Swal.fire({
        title: "Success!",
        text: message,
        icon: "success",
        confirmButtonText: "OK",
    });
}

export function showError(message) {
    Swal.fire({
        title: "Error!",
        text: message,
        icon: "error",
        confirmButtonText: "OK",
    });
}

export function showConfirm(callback) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, do it!",
    }).then((result) => {
        if (result.isConfirmed) {
            callback();
        }
    });
}
