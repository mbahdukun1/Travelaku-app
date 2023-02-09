const db_paketTravel = [
  {
    id: "toba1",
    place: "Toba Lake",
    hargaTicketDewasa: 3_000_000,
    hargaTicketAnak: 2_000_000,
  },
  {
    id: "bromo2",
    place: "Raja Ampat",
    hargaTicketDewasa: 2_000_000,
    hargaTicketAnak: 1_000_000,
  },
  {
    id: "gili3",
    place: "Bromo Mountain",
    hargaTicketDewasa: 2_000_000,
    hargaTicketAnak: 1_000_000,
  },
  {
    id: "semeru4",
    place: "Telaga Warna",
    hargaTicketDewasa: 3_000_000,
    hargaTicketAnak: 2_000_000,
  },
  {
    id: "bali5",
    place: "Karimun Jawa",
    hargaTicketDewasa: 4_000_000,
    hargaTicketAnak: 2_500_000,
  },
];

function getDataPaketTravelById(idInput) {
  if (!idInput) return "params undefined";

  if (typeof idInput !== "string") return "datatype invalid";

  for (let i = 0; i < db_paketTravel.length; i++) {
    const { id } = db_paketTravel[i];

    if (idInput === id) return db_paketTravel[i];
  }

  return "paket tidak ditemukan";
}

function getDataPaketTravel() {
  return db_paketTravel;
}
// let idPaketTravel = "lombok6"; // nanti ambil dari dom input user

// console.log(getDataPaketTravelById(idPaketTravel));
