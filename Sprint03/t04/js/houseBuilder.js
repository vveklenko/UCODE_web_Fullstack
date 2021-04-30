function HouseBlueprint(address, description, owner, size) {
    this.default_building_speed = 0.5;
    this.address = address;
    this.description = description;
    this.owner = owner;
    this.size = size;
    this.date = new Date();
    this.getDaysToBuild = function() {
        return this.size / this.default_building_speed;
    }
    this.toDateString = function() {
        console.log(this.date);
    }
    return this;
}

function HouseBuilder(address, description, owner, size, roomCount) {
    this.roomCount = roomCount;
    Object.setPrototypeOf(this, new HouseBlueprint(address, description, owner, size));
}
