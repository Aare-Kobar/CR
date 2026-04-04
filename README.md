# Multimeedia iseseiserv töö 3
# MYSQL andmebaasiserveri paigaldamine ja seadistamine

## Keskkond

* Virtuaalkeskkond: Proxmox
* Operatsioonisüsteem: Ubuntu Server
* Ligipääs: SSH (Windows masinast)
* Andmebaasiserver: MySQL

---

## Paigaldamine

Süsteemi uuendamine

```bash
sudo apt update
sudo apt upgrade -y
```

MYSQL serveri paigaldamine

```bash
sudo apt install mysql-server -y
```
<img width="867" height="53" alt="Screenshot 2026-04-04 at 13 01 32" src="https://github.com/user-attachments/assets/8ff19bde-d5e2-49b9-a993-c0ea790109df" />


Kontrollisin teenuse staatust:

```bash
sudo systemctl status mysql.service
```
<img width="1280" height="370" alt="Screenshot 2026-04-04 at 12 15 56" src="https://github.com/user-attachments/assets/d5b1f475-7604-414a-a45a-4c74ec87e25a" />

---

## MySQL turvaseadistus

```bash
sudo mysql_secure_installation
```
Eemaldasin testandmebaasi ning anonüümsed kasutajad.

## Andmebaasi loomine

```bash 
sudo mysql
```
```sql
CREATE DATABASE andmebaas;
```

---

## GitHubist ndmebaasi importimine

Logisin GitHubi sisse:

```bash
gh auth login
```

Kloonisn oma GitHub repository:

```bash
git clone https://github.com/Aare-Kobar/CR.git
cd CR
```

Andmebaasi importimine:

```bash
sudo mysql andmebaas < cars.sql
```

---

## Kontroll

```bash
sudo mysql
```

```sql
USE andmebaas;
SHOW TABLES;
```
<img width="714" height="298" alt="Screenshot 2026-04-04 at 12 03 35" src="https://github.com/user-attachments/assets/53bacdd2-dc30-480b-9c20-aec362cdbf99" />
Port 3306 avatud:
<img width="1272" height="99" alt="Screenshot 2026-04-04 at 13 18 33" src="https://github.com/user-attachments/assets/b0379501-d47a-40b0-bebc-efd09b0c9994" />



