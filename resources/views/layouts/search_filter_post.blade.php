<!-- SECTION FILTERS BAR -->
<div class="section-filters-bar v4">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
        <!-- FORM -->
        <form class="form">
            <!-- FORM ITEM -->
            <div class="form-item split">
                <!-- FORM INPUT -->
                <div class="form-input small @if(old('items_search')) {{ 'active' }} @else {{ '' }} @endif ">
                    <label for="items-search">Search Items</label>
                    <input type="text" id="items-search" name="items_search" value="{{ old('items_search') }}">
                </div>
                <!-- /FORM INPUT -->

                <!-- BUTTON -->
                <button class="button primary">
                    <!-- ICON MAGNIFYING GLASS -->
                    <svg class="icon-magnifying-glass">
                        <use xlink:href="#svg-magnifying-glass"></use>
                    </svg>
                    <!-- /ICON MAGNIFYING GLASS -->
                </button>
                <!-- /BUTTON -->
            </div>
            <!-- /FORM ITEM -->
        </form>
        <!-- /FORM -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->

    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
        <!-- FORM -->
        <form class="form">
            <!-- FORM ITEM -->
            <div class="form-item split medium">
                <!-- FORM SELECT -->
                <div class="form-select small">
                    <label for="items-filter-category">Filter By</label>
                    <select id="items-filter-category" name="items_filter_category">
                        <option value="0">Date Published</option>
                        <option value="1">Price</option>
                    </select>
                    <!-- FORM SELECT ICON -->
                    <svg class="form-select-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /FORM SELECT ICON -->
                </div>
                <!-- /FORM SELECT -->

                <!-- FORM SELECT -->
                <div class="form-select small">
                    <label for="items-filter-order">Order By</label>
                    <select id="items-filter-order" name="items_filter_order">
                        <option value="0">Descending</option>
                        <option value="1">Ascending</option>
                    </select>
                    <!-- FORM SELECT ICON -->
                    <svg class="form-select-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /FORM SELECT ICON -->
                </div>
                <!-- /FORM SELECT -->

                <!-- BUTTON -->
                <button class="button secondary">Apply Filters</button>
                <!-- /BUTTON -->
            </div>
            <!-- /FORM ITEM -->
        </form>
        <!-- /FORM -->
    </div>
</div>
<!-- /SECTION FILTERS BAR ACTIONS -->