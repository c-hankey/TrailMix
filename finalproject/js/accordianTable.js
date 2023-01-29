class Trail {
    trailName;
    location;
    park;
    mileage;
    incline;
    terrain;
    loopTrail;
    bikeAccesible;
    hours;
    season;

    constructor() {
        this.trailName = "Nothing";
        this.location = "Clarion, PA";
        this.park = "place";
        this.mileage = 3.5;
        this.incline = "steep";
        this.terrain = "grassy";
        this.loopTrail = false;
        this.bikeAccesible = true;
        this.hours = "duask to dawm";
        this.season = "year around";
    }

    constructor(name, place, parkName, distance, steepness, landscape, loop, bike, hoursOpen, seasonOpen) {
        this.trailName = name;
        this.location = place;
        this.park = parkName;
        this.mileage = distance;
        this.incline = steepness;
        this.terrain = landscape;
        this.loopTrail = loop;
        this.bikeAccesible = bike;
        this.hours = hoursOpen;
        this.season = seasonOpen;
    }

    createTable() {
    }
}