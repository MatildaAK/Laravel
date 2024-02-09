Skapa detta i en readme fil eller en text fil brevid den

1. Identify resources

	recipies
	lists

2. Model URLs

	/recipies
	/recipies/{id}

	/lists
	/lists/{id}

//	/lists/{id}/recipies

//	/lists/{id}/recipies/{id}

3. Resource representation

// mängd
{
	"amount":"278",
	"size": "20",
	"index": "3",
	"self":"/recipies",
	"recipies"[
		{
			"self":"/recipies/1",
			"name": "korv med mos",
			"tilldagningssteg": [
				"koka korv ...",
				"koka mos",
				""lägg på ketchup"
				]
		},
		{
			...
		}
	]
}

// ett recept
		{
			"self":"/recipies/1",
			"name": "korv med mos",
			"tilldagningssteg": [
				"koka korv ...",
				"koka mos",
				""lägg på ketchup"
				]
		}

// Listor
{
	"amount":4,
	"self":"/lists",
	"lists":[
		{
			"self":"lists/1",
			"name":"korvmojslistan",
		},
		......
	]
}

// Exempel på /list/{id}

{
	"self":"lists/1",
	"name":"korvmojslistan",
	"recipies":[
		{
			"myComment": "Det här är ett gott recept."
			"ref": "recipies/1",
		}
	]
}

// Exempel på /list/{id}/recipies

{
	"self":"lists/1",
	"name":"korvmojslistan",
	"meta":{
		...
	}
	"recipiesRef":"/list/1/recipies"
}


4. Assign HTTP Methods
(kolla video runt 1.45)

- HTTP GET /recipies
- HTTP GET /lists

- HTTP GET /recipies?index=0&size=20
- HTTP GET /recipies?filter="vegan"

- HTTP GET /recipies/{id}
- HTTP GET /lists/{id}
	
- HTTP POST /recipies
- HTTP POST /lists

- HTTP PUT /recipies/{id}
- HTTP PUT /lists/{id}

- HTTP DELETE /recipies/{id}
- HTTP DELETE /lists/{id}


Försök att undvika dessa:

- HTTP DELETE /lists 		// Det tar bort alla listor
- HTTP DELETE /recipies 		// det tar bort alla recept

- HTTP PUT /lists			// ändrar på alla listor det som vi ändrat
- HTTP PUT /recipies		// ändrar på alla recept som vi ändrat
	
- HTTP POST /lists/{id}


	

		