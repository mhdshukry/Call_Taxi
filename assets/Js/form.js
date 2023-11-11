function updateDistricts() {
    var provinceSelect = document.getElementById("province");
    var districtSelect = document.getElementById("district");

    districtSelect.innerHTML = "";

    var selectedProvince = provinceSelect.options[provinceSelect.selectedIndex].value;

    if (selectedProvince === "North Western Province") {
        addDistrictOption("Puttalam");
        addDistrictOption("Kurunagala");

    } else if (selectedProvince === "Northern Province") {
        addDistrictOption("Jaffna");
        addDistrictOption("Mannar");
        addDistrictOption("Kilinochi");
        addDistrictOption("Mullaitivu");
        addDistrictOption("Vavuniya");
    }

    else if (selectedProvince === "Western Province") {
        addDistrictOption("Colombo");
        addDistrictOption("Gampaha");
        addDistrictOption("Kalutara");
    }

    else if (selectedProvince === "Eastern Province") {
        addDistrictOption("Ampara");
        addDistrictOption("Batticaloa");
        addDistrictOption("Trincomalee");
    }

    else if (selectedProvince === "Sabragamuwa Province") {
        addDistrictOption("Kegalle");
        addDistrictOption("Ratnapura");
    }

    else if (selectedProvince === "Uva Province") {
        addDistrictOption("Badulla");
        addDistrictOption("Monaragala");
    }

    else if (selectedProvince === "Central Province") {
        addDistrictOption("Kandy");
        addDistrictOption("Nuwaraeiya");
        addDistrictOption("Matala");
    }

    else if (selectedProvince === "Southern Province") {
        addDistrictOption("Matara");
        addDistrictOption("Galle");
        addDistrictOption("Hambantota");
    }

    else if (selectedProvince === "North Central Province") {
        addDistrictOption("Anuradapura");
        addDistrictOption("Polanaruwa");
    }



    function addDistrictOption(district) {
        var option = document.createElement("option");
        option.text = district;
        option.value = district;
        document.getElementById("district").add(option);
    }
}