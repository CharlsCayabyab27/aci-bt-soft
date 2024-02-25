<!DOCTYPE html>
<html>
<head>
    <title>Certificate Form</title>
</head>
<style>
    iframe {
        position: absolute;
        left: 30%;
        top:5%; 
        width: 21cm; 
        height: 30cm; 
        border: none; 
        overflow: hidden; 
        transform: scale(0.80); 
        transform-origin: 0 0; /* Set the scaling origin */
        /* border: 2px solid black;     */
        

    }

</style>
<body>
    <h1>Certificate Form</h1>
    
           <select id="certificateType" onchange="toggleFields()">
        <option value="Indigency">Indigency (AICS)</option>
        <option value="DeathCertificate">Death Certificate</option>
        <option value="LotOwnership">Lot Ownership</option>
        <option value="BarangayBusinessPermitnew">Barangay Business Permit New</option>
        <option value="BarangayBusinessPermitrenew">Barangay Business Permit Renew</option>
        <option value="BarangayCertification">Barangay Certification (First time Job Seeker)</option>
        <option value="Oathtaking">Oathtaking</option>
        <option value="CertificateOfCohabitation">Certificate of Cohabitation</option>
    </select>
    
    
    <!DOCTYPE html>
<html>
<head>
    <title>Form Fields</title>
</head>
<body>
    <div class="forms">
<div id="Indigency" style="display: none;">
        <label for="indigencyFullName">Full Name:</label>
        <input type="text" id="indigencyFullName"><br>

        <label for="indigencyAddress">Address:</label>
        <input type="text" id="indigencyAddress"><br>

        <label for="indigencyIssuedDate">Issued Date:</label>
        <input type="text" id="indigencyIssuedDate"><br>
    </div>

    <div id="DeathCertificate" style="display: none;">
        <label for="deathFullName">Full Name [Name of the dead person]:</label>
        <input type="text" id="deathFullName"><br>

        <label for="deathAge">Age:</label>
        <input type="text" id="deathAge"><br>

        <label for="deathAddress">Address:</label>
        <input type="text" id="deathAddress"><br>

        <label for="dateOfDeath">Date of death:</label>
        <input type="text" id="dateOfDeath"><br>

        <label for="timeOfDeath">Time of death:</label>
        <input type="text" id="timeOfDeath"><br>

        <label for="causeOfDeath">Cause of death:</label>
        <input type="text" id="causeOfDeath"><br>

        <label for="requestingFullName">Full Name [Name of the requesting person]:</label>
        <input type="text" id="requestingFullName"><br>

        <label for="relationshipToDeadPerson">Relationship to the dead person:</label>
        <input type="text" id="relationshipToDeadPerson"><br>

        <label for="dateRequested">Date requested:</label>
        <input type="text" id="dateRequested"><br>
    </div>

    <div id="LotOwnership" style="display: none;">
        <label for="lotFullName">Full Name:</label>
        <input type="text" id="lotFullName"><br>

        <label for="lotAddress">Address:</label>
        <input type="text" id="lotAddress"><br>

        <label for="lotOption">Option:</label>
        <input type="text" id="lotOption"><br>

        <label for="lotNumber">Lot Number:</label>
        <input type="text" id="lotNumber"><br>

        <label for="lotAreaNumerical">Area Measurement (Numerical Form):</label>
        <input type="text" id="lotAreaNumerical"><br>

        <label for="lotAreaWord">Area Measurement (Word Form):</label>
        <input type="text" id="lotAreaWord"><br>

        <label for="lotLocationAddress">Location Address:</label>
        <input type="text" id="lotLocationAddress"><br>

        <label for="lotIssuedDate">Issued Date:</label>
        <input type="text" id="lotIssuedDate"><br>
    </div>

    
    <div id="BarangayBusinessPermitnew" style="display: none;">
        <label for="businessName">Business name/ Trade Activity:</label>
        <input type="text" id="businessName"><br>

        <label for="businessAddress">Address:</label>
        <input type="text" id="businessAddress"><br>

        <label for="businessIssuedDate">Issued Date:</label>
        <input type="text" id="businessIssuedDate"><br>
    </div>

    <div id="BarangayBusinessPermitrenew" style="display: none;">
        <label for="businessName">Business name/ Trade Activity:</label>
        <input type="text" id="businessName"><br>

        <label for="businessAddress">Address:</label>
        <input type="text" id="businessAddress"><br>

        <label for="businessIssuedDate">Issued Date:</label>
        <input type="text" id="businessIssuedDate"><br>
    </div>

    <div id="BarangayCertification" style="display: none;">
        <label for="jobSeekerFullName">Full Name:</label>
        <input type="text" id="jobSeekerFullName"><br>

        <label for="jobSeekerAddress">Address:</label>
        <input type="text" id="jobSeekerAddress"><br>

        <label for="residencyPeriod">Period of Residency:</label>
        <input type="text" id="residencyPeriod"><br>

        <label for="certificationSignedDate">Signed date:</label>
        <input type="text" id="certificationSignedDate"><br>

        <label for="certificationValidationDate">Validation date:</label>
        <input type="text" id="certificationValidationDate"><br>
    </div>

    <div id="Oathtaking" style="display: none;">
        <label for="applicantFullName">Full Name of Applicant:</label>
        <input type="text" id="applicantFullName"><br>

        <label for="applicantAge">Age:</label>
        <input type="text" id="applicantAge"><br>

        <label for="applicantResidencyPeriod">Period of Residency:</label>
        <input type="text" id="applicantResidencyPeriod"><br>

        <label for="applicantSignedDate">Signed date:</label>
        <input type="text" id="applicantSignedDate"><br>

        <label for="guardianFullName">Guardian Full Name:</label>
        <input type="text" id="guardianFullName"><br>

        <label for="guardianAge">Guardian Age:</label>
        <input type="text" id="guardianAge"><br>

        <label for="guardianOption">Option (Parent/ Guardian):</label>
        <input type="text" id="guardianOption"><br>

        <label for="applicantName">Name of Applicant:</label>
        <input type="text" id="applicantName"><br>

        <label for="applicantAddress">Address:</label>
        <input type="text" id="applicantAddress"><br>

        <label for="applicantResidencyPeriod2">Period of Residency:</label>
        <input type="text" id="applicantResidencyPeriod2"><br>

        <label for="guardianFullName2">Guardian Full Name:</label>
        <input type="text" id="guardianFullName2"><br>
    </div>

    <div id="CertificateOfCohabitation"  style="display: none;">
        <label for="cohabitant1FullName">Full Name [male or female]:</label>
        <input type="text" id="cohabitant1FullName"><br>

        <label for="cohabitant1Birthdate">Birthdate:</label>
        <input type="text" id="cohabitant1Birthdate"><br>

        <label for="cohabitant2FullName">Full Name [male or female]:</label>
        <input type="text" id="cohabitant2FullName"><br>

        <label for="cohabitant2Birthdate">Birthdate:</label>
        <input type="text" id="cohabitant2Birthdate"><br>

        <label for="cohabitationAddress">Address:</label>
        <input type="text" id="cohabitationAddress"><br>

        <label for="dateOfMarriage">Date of Marriage:</label>
        <input type="text" id="dateOfMarriage"><br>

        <label for="periodOfMarriage">Period of marriage:</label>
        <input type="text" id="periodOfMarriage"><br>

        <label for="cohabitationIssuedDate">Issued Date:</label>
        <input type="text" id="cohabitationIssuedDate"><br>
    </div>
    </div>


</body>
</html>

    <iframe id="myIframe" src="" width="100%" height="100%"></iframe>

    <script>
        const certificateType = document.getElementById('certificateType').value;
            const forms = document.querySelectorAll('.forms > div');
            document.querySelectorAll('.forms > div').forEach(div => {
        div.style.display = 'none';
    });

            function toggleFields() {
    const certificateType = document.getElementById('certificateType').value;
    const iframe = document.getElementById('myIframe');
    switch (certificateType) {
        case 'Indigency':
            document.getElementById('CertificateOfCohabitation').style.display = 'none';
            document.getElementById('Oathtaking').style.display = 'none';
            document.getElementById('BarangayCertification').style.display = 'none';
            document.getElementById('BarangayBusinessPermitrenew').style.display = 'none';
            document.getElementById('BarangayBusinessPermitnew').style.display = 'none';
            document.getElementById('LotOwnership').style.display = 'none';
            document.getElementById('DeathCertificate').style.display = 'none';
            document.getElementById('Indigency').style.display = 'block';
            
            iframe.src = 'aci-bt-soft/certificates/br.html';
            break;
        case 'DeathCertificate':
            document.getElementById('CertificateOfCohabitation').style.display = 'none';
            document.getElementById('Oathtaking').style.display = 'none';
            document.getElementById('BarangayCertification').style.display = 'none';
            document.getElementById('BarangayBusinessPermitrenew').style.display = 'none';
            document.getElementById('BarangayBusinessPermitnew').style.display = 'none';
            document.getElementById('LotOwnership').style.display = 'none';
            document.getElementById('DeathCertificate').style.display = 'block';
            document.getElementById('Indigency').style.display = 'none';
            iframe.src = 'aci-bt-soft/certificates/death_cert.html';
            break;
        case 'LotOwnership':
            document.getElementById('CertificateOfCohabitation').style.display = 'none';
            document.getElementById('Oathtaking').style.display = 'none';
            document.getElementById('BarangayCertification').style.display = 'none';
            document.getElementById('BarangayBusinessPermitrenew').style.display = 'none';
            document.getElementById('BarangayBusinessPermitnew').style.display = 'none';
            document.getElementById('LotOwnership').style.display = 'block';
            document.getElementById('DeathCertificate').style.display = 'none';
            document.getElementById('Indigency').style.display = 'none';
            iframe.src = 'aci-bt-soft/certificates/lot.html';
            break;
        case 'BarangayBusinessPermitnew':
            document.getElementById('CertificateOfCohabitation').style.display = 'none';
            document.getElementById('Oathtaking').style.display = 'none';
            document.getElementById('BarangayCertification').style.display = 'none';
            document.getElementById('BarangayBusinessPermitrenew').style.display = 'none';
            document.getElementById('BarangayBusinessPermitnew').style.display = 'block';
            document.getElementById('LotOwnership').style.display = 'none';
            document.getElementById('DeathCertificate').style.display = 'none';
            document.getElementById('Indigency').style.display = 'none';
            iframe.src = 'aci-bt-soft/certificates/br.html';
            
            break;
        case 'BarangayBusinessPermitrenew':
            document.getElementById('CertificateOfCohabitation').style.display = 'none';
            document.getElementById('Oathtaking').style.display = 'none';
            document.getElementById('BarangayCertification').style.display = 'none';
            document.getElementById('BarangayBusinessPermitrenew').style.display = 'block';
            document.getElementById('BarangayBusinessPermitnew').style.display = 'none';
            document.getElementById('LotOwnership').style.display = 'none';
            document.getElementById('DeathCertificate').style.display = 'none';
            document.getElementById('Indigency').style.display = 'none';
            iframe.src = 'aci-bt-soft/certificates/bn.html';
            break;
        case 'BarangayCertification':
            document.getElementById('CertificateOfCohabitation').style.display = 'none';
            document.getElementById('Oathtaking').style.display = 'none';
            document.getElementById('BarangayCertification').style.display = 'block';
            document.getElementById('BarangayBusinessPermitrenew').style.display = 'none';
            document.getElementById('BarangayBusinessPermitnew').style.display = 'none';
            document.getElementById('LotOwnership').style.display = 'none';
            document.getElementById('DeathCertificate').style.display = 'none';
            document.getElementById('Indigency').style.display = 'none';
            iframe.src = 'aci-bt-soft/certificates/certification.html';
            break;
        case 'Oathtaking':
            document.getElementById('CertificateOfCohabitation').style.display = 'none';
            document.getElementById('Oathtaking').style.display = 'block';
            document.getElementById('BarangayCertification').style.display = 'none';
            document.getElementById('BarangayBusinessPermitrenew').style.display = 'none';
            document.getElementById('BarangayBusinessPermitnew').style.display = 'none';
            document.getElementById('LotOwnership').style.display = 'none';
            document.getElementById('DeathCertificate').style.display = 'none';
            document.getElementById('Indigency').style.display = 'none';
            iframe.src = 'aci-bt-soft/certificates/.html';
            break;
        case 'CertificateOfCohabitation':
            document.getElementById('CertificateOfCohabitation').style.display = 'block';
            document.getElementById('Oathtaking').style.display = 'none';
            document.getElementById('BarangayCertification').style.display = 'none';
            document.getElementById('BarangayBusinessPermitrenew').style.display = 'none';
            document.getElementById('BarangayBusinessPermitnew').style.display = 'none';
            document.getElementById('LotOwnership').style.display = 'none';
            document.getElementById('DeathCertificate').style.display = 'none';
            document.getElementById('Indigency').style.display = 'none';
            iframe.src = 'aci-bt-soft/certificates/.html';
            break;
        default:

            iframe.src = '';
            break;
    }
}
            iframe.style.display = 'block';
        
    </script>
</body>
</html>
