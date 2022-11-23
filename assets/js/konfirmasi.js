function hapusMenu() {

    Swal.fire({
        title: 'Are you sure?',
             text: "yakin ingin menghapus",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Ya, hapus!'  
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    });
}

function hapusRole() {
    
    Swal.fire({
        title: 'Are you sure?',
             text: "yakin ingin menghapus",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Ya, hapus!'  
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    });
}

function hapusSubmenu() {
    
    Swal.fire({
        title: 'Are you sure?',
             text: "yakin ingin menghapus",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Ya, hapus!'  
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    });
}