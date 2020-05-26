<?php
    session_start();
?>
#dodavanje komentara na kod

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
       body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
    <form action="" method="post">
        <div class="form-group">
            <label>Ime</label>
      
		#<input type="text" name="ime" class="form-control">
        </div>
        <div class="form-group">
            <label>Prezime</label>
            <input type="text" name="prezime" class="form-control">
        </div>
        <div class="form-group" <?php if($_SESSION["razina"]=="korisnik") echo "hidden"?>>
            <label>Slika</label>
            <input type="file" name="slika" class="form-control">
        </div>
        <div class="form-group" <?php if($_SESSION["razina"]=="korisnik") echo "hidden"?>>
            <label>Spol</label> <br>
            <input type="radio" name="spol" value="musko">Muško <br>
            <input type="radio" name="spol" value="zensko">Žensko 
        </div>
        <div class="form-group">
            <label>Datum Rođenja</label>
            <input type="date" name="date" class="form-control">
        </div>
        <div class="form-group">
           <input type="submit" class="btn btn-primary" value="Promjeni">
        </div>
    </form>
</div>
</body>
</html>


<!--1b-->
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema" elementFormDefault="qualified">
	<xs:element name="Katalog">
		<xs:complexType>
			<xs:sequence>
				<xs:element name="Predmet" maxOccurs="unbounded">
					<xs:complexType>
						<xs:sequence>
							<xs:element name="Naslov">
								<xs:simpleType>
									<xs:restriction base="xs:string">
										<xs:minLength value="1"/>
										<xs:maxLength value="200"/>
									</xs:restriction>
								</xs:simpleType>
							</xs:element>
							<xs:element name="Autor">
								<xs:simpleType>
									<xs:restriction base="xs:string">
										<xs:maxLength value="100"/>
									</xs:restriction>
								</xs:simpleType>
							</xs:element>
							<xs:element name="Trajanje">
								<xs:simpleType>
									<xs:restriction base="xs:int">
										<xs:minInclusive value="30"/>
										<xs:maxInclusive value="500"/>
									</xs:restriction>
								</xs:simpleType>
							</xs:element>
							<xs:element name="GodinaIzdanja">
								<xs:simpleType>
									<xs:restriction base="xs:string">
										<xs:pattern value="[0-9][0-9][0-9][0-9]"/>
									</xs:restriction>
								</xs:simpleType>
							</xs:element>
						</xs:sequence>
						<xs:attribute name="Tip" use="required">
							<xs:simpleType>
								<xs:restriction base="xs:string">
									<xs:enumeration value="CD"/>
									<xs:enumeration value="DVD"/>
									<xs:enumeration value="LP"/>
								</xs:restriction>
							</xs:simpleType>
						</xs:attribute>
					</xs:complexType>
				</xs:element>
			</xs:sequence>
		</xs:complexType>
	</xs:element>
</xs:schema>



<!--2b-->
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema" elementFormDefault="qualified">
	<xs:element name="VozniRed">
		<xs:complexType>
			<xs:sequence maxOccurs="unbounded">
				<xs:element name="Putovanje">
					<xs:complexType>
						<xs:sequence>
							<xs:element name="PolazniKolodvor">
								<xs:simpleType>
									<xs:restriction base="xs:string">
										<xs:maxLength value="100"/>
										<xs:minLength value="3"/>
									</xs:restriction>
								</xs:simpleType>
							</xs:element>
							<xs:element name="DolazniKolodvor">
								<xs:simpleType>
									<xs:restriction base="xs:string">
										<xs:enumeration value="Zagreb(Glavni kolodvor)"/>
										<xs:enumeration value="Zagreb(Zapadni kolodvor)"/>
									</xs:restriction>
								</xs:simpleType>
							</xs:element>
							<xs:element name="DatumPolaska">
								<xs:simpleType>
									<xs:restriction base="xs:date">
										<xs:minInclusive value="2006-04-01"/>
									</xs:restriction>
								</xs:simpleType>
							</xs:element>
							<xs:element name="VrijemePolaska">
								<xs:simpleType>
									<xs:restriction base="xs:time">
										<xs:maxInclusive value="23:30:00"/>
									</xs:restriction>
								</xs:simpleType>
							</xs:element>
							<xs:element name="VrijemeDolaska" type="xs:time"/>
							<xs:element name="Cijena">
								<xs:simpleType>
									<xs:restriction base="xs:decimal">
										<xs:fractionDigits value="2"/>
									</xs:restriction>
								</xs:simpleType>
							</xs:element>
						</xs:sequence>
						<xs:attribute name="Sifra">
							<xs:simpleType>
								<xs:restriction base="xs:string">
									<xs:pattern value="[a-z][a-z][a-z]-[0-9][0-9][0-9]"/>
								</xs:restriction>
							</xs:simpleType>
						</xs:attribute>
					</xs:complexType>
				</xs:element>
			</xs:sequence>
		</xs:complexType>
	</xs:element>
</xs:schema>


<!--3b-->
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema">
    <xs:attribute name="Tip" type="xs:string"/>
	<xs:element name="Naslov" type="xs:string"/>
    <xs:element name="Autor" type="xs:string"/>
    <xs:element name="Trajanje" type="xs:int"/>
    <xs:element name="GodinaIzdanja" type="xs:int"/>
    

    <xs:element name="Katalog">
        <xs:complexType>
            <xs:sequence>
                <xs:element name="Predmet" maxOccurs="unbounded">
                    <xs:complexType>
                        <xs:sequence>
                            <xs:element ref="Naslov"/>
                            <xs:element ref="Autor"/>
                            <xs:element ref="Trajanje"/>
                            <xs:element ref="GodinaIzdanja"/>
                        </xs:sequence>
                        <xs:attribute ref="Tip"/>
                    </xs:complexType>
                </xs:element>
            </xs:sequence>
        </xs:complexType>
    </xs:element>
</xs:schema>


<!--4b-->
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema" elementFormDefault="qualified">
	
	<xs:simpleType name="CijenaAutomobila">
		<xs:restriction base="xs:decimal">
			<xs:fractionDigits value="2"/>
		</xs:restriction>
	</xs:simpleType>

	<xs:complexType name="OsobineAutomobila">
		<xs:sequence>
			<xs:element name="Motor" type="xs:string"/>
			<xs:element name="BrojVrata" type="xs:int"/>
		</xs:sequence>
	</xs:complexType>
	
	<xs:complexType name="DodatnaOpremaAutomobila">
		<xs:sequence>
			<xs:element name="OpremaZaMaglu">
			  <xs:simpleType>
				<xs:restriction base="xs:string">
				  <xs:pattern value="DA|NE"/>
				</xs:restriction>
			  </xs:simpleType>
			</xs:element>
			<xs:element name="MetalikBoja">
			  <xs:simpleType>
				<xs:restriction base="xs:string">
				  <xs:pattern value="DA|NE"/>
				</xs:restriction>
			  </xs:simpleType>
			</xs:element>
			<xs:element name="ZasJastuci">
			  <xs:simpleType>
				<xs:restriction base="xs:string">
				  <xs:pattern value="DA|NE"/>
				</xs:restriction>
			  </xs:simpleType>
			</xs:element>
		</xs:sequence>
	</xs:complexType>
	

	<xs:element name="Automobil">
		<xs:complexType>
			<xs:sequence>
				<xs:element name="Proizvodi" type="xs:string"/>
				<xs:element name="Model" type="xs:string"/>
				<xs:element name="Cijena" type="CijenaAutomobila"/>
				<xs:element name="Osobine" type="OsobineAutomobila"/>
				<xs:element name="DodatnaOprema" type="DodatnaOpremaAutomobila"/>
			</xs:sequence>
		</xs:complexType>
	</xs:element>
</xs:schema>
