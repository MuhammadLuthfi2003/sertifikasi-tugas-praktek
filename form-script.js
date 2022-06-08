const btnBayar = document.getElementById("btn-bayar");
const anak = document.getElementById("pengunjungAnak");
const dewasa = document.getElementById("pengunjungDewasa");
const total = document.getElementById("totalBayar");

const price = 12000000;

btnBayar.addEventListener("click", () => {
    let jumlahAnak = anak.value;
    let jumlahDewasa = dewasa.value;

    jumlahAnak = parseInt(jumlahAnak);
    jumlahDewasa = parseInt(jumlahDewasa);

    totalPrice = jumlahDewasa * price + (1/2 * price) * jumlahAnak;

    total.textContent = `Rp.${totalPrice}`;
});

