# API dla urządzeń

##### GET http(s)://adres_serwera/api/getCurrentLecture/{classroom _name}

Przykładowa odpowiedź
```json
[
    {
        "id": 2,
        "lesson_id": 1,
        "classroom_id": 1,
        "start_date": "2019-10-15 22:00:00",
        "end_date": "2019-10-15 23:30:00",
        "created_at": "2019-10-15 20:12:23",
        "updated_at": "2019-10-15 20:12:23",
        "lesson": {
            "id": 1,
            "name": "Automatyka i sterowanie",
            "description": "Teoria sterowania",
            "lecturer_id": 1,
            "created_at": "2019-10-06 07:11:22",
            "updated_at": "2019-10-06 07:11:22"
        }
    }
]
```

##### POST http(s)://adres_serwera/api/addAttendanceRecord/{attendance_list_id}
Przykładowy payload 
```json
{
  "nfc_id": "123456789123"
}
```
Przykładowa odpowiedź
```text
Zapisano
```
lub
```text
Error
```

##### POST http(s)://adres_serwera/api/register/{nfc_id}

Przykładowa odpowiedź
```text
1
```

Po zarejestrowaniu należy udać się na stronę
**http(s)://adres_serwera/register/{otrzymane_id}**
gdzie wyświetli się formularz rejestracji użytkownika.