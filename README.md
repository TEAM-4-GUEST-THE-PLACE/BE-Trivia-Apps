# How To Use Admin Guess The Place Backend Using Postman

#### A. User

1.  Create Users<br>

    -   Url : http://localhost:8000/api/user
    -   Method : `POST`
    -   Json body example :

              {
                  "fullname": "Iqbal",
                  "username": "iqbalpradipta",
                  "email": "iqbalpradipta@gmail.com"
              }

2.  Get Users<br>

    -   Url : http://localhost:8000/api/user
    -   Method : `GET`

3. Update Users<br>

    -   Url : http://localhost:8000/api/user/{id}
    -   Method : `POST`
    -   Form data add `_method` = `PUT`
    -   Form data example:
        
    ```
        fullname         = Iqbal Pradipta
        username         = iqbal123
        email            = iqbalpradipta2@gmail.com
        _method          = PUT
    ```

4. Delete Users<br>
    -   Url : http://localhost:8000/api/user
    -   Method : `DELETE`

5. Update Avatars Users<br>
    -   Url : http://localhost:8000/api/user/{id}/update-avatar
    -   Method : `POST`
    ```
        avatars_id       = 1
        _method          = PUT
    ```

#### B. Avatar

1. Getting all Avatar (no authorization)<br>

-   Url : http://localhost:8000/api/v1/Avatar
-   Method : `GET`

2. Getting a Avatar (no authorization)<br>

-   Url : http://localhost:8000/api/v1/Avatar/{Avatar-id}
-   Method : `GET`

3. Create a Avatar (required authorizaton (Admin))

-   Url : http://localhost:8000/api/v1/Avatar/add
-   Method : `GET`
-   Form-data body example :

```
    title       = Debat Capres Memanas
    img         = capres.png
    description = Debat Capres kembali memanas di tahun 2024
```

4. Update a Avatar (required authorizaton (Admin))<br>

-   Url : http://localhost:8000/api/v1/Avatar/{Avatar-id}
-   Method : `PUT`
-   Form-data body example :

```
    title       = Debat Capres Memanas
    img         = capres.png
    description = Debat Capres kembali memanas di tahun 2024
```

5. Delete a Avatar (required authorization (Admin))<br>

-   Url : http://localhost:8000/api/v1/Avatar/{Avatar-id}
-   Method : `DELETE`

#### C. Paslon

1. Getting all paslon (no authorization)<br>

-   Url : http://localhost:8000/api/v1/paslon
-   Method : `GET`

2. Getting a paslon (no authorization)<br>

-   Url : http://localhost:5000/api/v1/paslon/{paslon-id}
-   Method : `GET`

3. Create a paslon (required authorizaton (Admin))

-   Url : http://localhost:5000/api/v1/paslon
-   Method : `POST`
-   Form-data body example :

```
    name          = Bowo
    nomorUrut     = 1
    visiMisi = Berantas Tikus
    img         = wujudAseliBowo.png
```

4. Update a paslon (required authorizaton (Admin))

-   Url : http://localhost:5000/api/v1/paslon/{paslon-id}
-   Method : patch
-   Form-data body example :

```
    name          = Bowo
    nomorUrut     = 1
    visiMisi      = Berantas Tikus
    img         = wujudAseliBowo.png
```

5. Delete a paslon (required authorization (admin))<br>

-   Url : http://localhost:5000/api/v1/paslon/{paslon-id}
-   Method : `DELETE`

#### D. Partai

1. Getting all partais (no authorization)<br>

-   Url : http://localhost:5000/api/v1/partai
-   Method : `GET`

2. Getting a partai (no authorization)<br>

-   Url : http://localhost:5000/api/v1/partai/{partai-id}
-   Method : `GET`

3. Create a partai (required authorizaton)

-   Url : http://localhost:5000/api/v1/partai
-   Method : `POST`
-   Form-data body example :

```
    name          = Partai Kandang
    leader        = Ibu Besar
    visiMisi      = REKAM BACA POSTING
    alamat        = sebelah warung barokah
    img           = ibuBesar.png
```

4. Update a partai (required authorizaton (admin))

-   Url : http://localhost:5000/api/v1/partais/{{partai-id}}
-   Method : `PATCH`
-   Form-data body example :

```
    name          = Partai Kandang
    leader        = Ibu Besar
    visiMisi      = REKAM BACA POSTING
    alamat        = sebelah warung barokah
    img           = ibuBesar.png
```

5. Delete a partai (required authorization (admin))

-   Url : http://localhost:5000/api/v1/partais/{{partai-id}}
-   Method : `DELETE`

6. Pick a Paslon as Partai (required authorization (admin))<br>

-   Url : http://localhost:5000/api/v1/partai/{{partai-id}}
-   Method : `POST`
-   Json body example :

          {
              "paslonId" : 1
          }

#### E. Voter

1. Getting all vote (required authorization (users))<br>

-   Url : http://localhost:5000/api/v1/voting
-   Method : `GET`

2. Voting (required authorization (users))<br>

-   Url : http://localhost:5000/api/v1/voting<br>
-   Method : `POST`
-   Json body example :

          {
              "paslonId" : 1
          }

### NOTES:

If error when POST article, paslon, or Partai and error return:

        {
            "error":
            {
                "code": "ETIMEDOUT"
            }
        }

make sure your internet is stable because the problem is when uploading image to cloudinary

to resolve this error Only change your internet.
