<div class="tab fade">
<div class="row">
    <div class="c12">
        <div class="options">
        <input type="radio" name="trip" checked id="one-way" hidden>
            <label for="one-way">One Way</label>
            <input type="radio" name="trip" id="round-trip" hidden>
            <label for="round-trip"> Round Trip</label>
        </div>
    </div>
</div>
<div class="row no-gutters row-rtl">
    <div class="c3 data-input">
        <div class="input-wrapper">
            <span class="input-label">From</span>
            <div class="input-items">
                <input type="text" placeholder="Origin" />
            </div>
        </div>
    </div>
    <div class="c3 data-input">
        <div class="input-wrapper">
            <span class="input-label">To</span>
            <div class="input-items">
                <input type="text" placeholder="Destination" />
            </div>
        </div>
    </div>
    <div class="c3 data-input">
        <div class="input-wrapper">
            <div class="row no-gutters items-center">
                <div class="c6 c-sm-6">
                    <span class="input-label">Departure</span>
                    <div class="input-items">
                        <input
                            type="date"
                            placeholder=""
                            value="12-01-2020"
                            />
                    </div>
                </div>
                <div class="c6 c-sm-6">
                    <span class="input-label">Return</span>
                    <div class="input-items">
                        <span class="dashed hide show-md">-</span>
                        <input
                            type="date"
                            placeholder=""
                            value="12-01-2020"
                            />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c3 data-input flex row-rtl">
    <div class="dropshow">
        <div class="input-wrapper travelers">
            <span class="input-label">Travelers</span>
            <div class="passenger-info rtl-align-right">
                <span>1</span>
                <span>Traveler</span>,
                <span>First</span>
            </div>
        </div>
        </div>
        <div class="passenger-dropdown pb-20">
        <div class="passenger-dropdown-head rtl-align-right">
            <span >Options</span>
        </div>
        <div class="flex room-row flex-content-between row-rtl">
            <div class="passenger-dropdown-left">
                <span>Adult </span>
                <span class="text-muted ml-5"> ( +12 )</span>
            </div>
            <div class="passenger-dropdown-right">
                <button class="decrease">-</button>
                <span>1</span>
                <button class="increase">+</button>
            </div>
        </div>
        <div class="flex room-row flex-content-between items-center row-rtl">
            <div class="passenger-dropdown-left">
                <span>Children</span>
                <span class="text-muted ml-5">( 2y to 11y )</span>
            </div>
            <div class="passenger-dropdown-right">
                <button class="decrease">-</button>
                <span>1</span>
                <button class="increase">+</button>
            </div>
        </div>
        <div class="class_type">
        <select name="" id="">
            <option>Economy</option>
            <option>Premium</option>
            <option>Business</option>
            <option>First</option>
        </select>
        </div>
        <!-- <button class="add-room mt-20" type="button">Add room +</button> -->
    </div>
        <div class="searchbutton">
            <button type="submit">
            <span class="icon-search">&#9740;</span>
            </button>
        </div>
    </div>
</div>
</div>