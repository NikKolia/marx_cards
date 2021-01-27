<?php
/*
 * Template Name: Shopping page
 *
 * */
get_header();
?>

    <div class="main shoppingPage" id="app">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <h2>PSA GROUP
                        SUBMISSION</h2>
                </div>
            </div>
            <div class="row mb-5 justify-content-between align-items-center">
                <div class="col-12 block">
                    <div class="row">
                        <div class="col-4 slider-img">
                            <?php echo do_shortcode('[slide-anything id="1237"]'); ?>
                        </div>
                        <div class="col-8 mt-3">
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <h3>MEN'S DRI-POWER® FLEECE HOODIE</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-7 mt-3">
                                    <p>
                                        Whether you're working out, running errands or just relaxing at home, this versatile hoodie
                                        will keep you comfortable. Made in the USA with medium-weight fleece, featuring Dri-Power®
                                        moisture wicking technology to keep body heat in so you can stay warm and dry. Ribbed
                                        waistband and cuffs provide a secure fit, front muff pocket for convenient storage and
                                        drawstring hood.
                                    </p>
                                </div>
                                <div class="col-5 mt-3 center">
                                    <p class="shopPrice">Price: $1</p>
                                    <!-- <p class="shopPrice">Price: $40</p> -->
                                    <p class="shopQuantity">Quantity: <input v-model="hoody.count" placeholder="1" type="number" min="1"></p>
                                    <select
                                            v-model="hoody.size"
                                            :class="{ 'field-not-valid' : error.hoody }"
                                            class="form-select pl-2 pr-2"
                                    >
                                        <option disabled value="">Choose size</option>
                                        <option value="small">Small</option>
                                        <option value="medium">Medium</option>
                                        <option value="large">Large</option>
                                        <option value="xlarge">XLarge</option>
                                        <option value="xxlarge">XXLarge</option>
                                    </select>
                                    <button @click="addHoody" type="button" class="btn btn-primary">Add to cart</button>

                                    <div class="error-message" v-if="this.error.hoody">Please choose size!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 block">
                    <div class="row">
                        <div class="col-4 slider-img">
                            <?php echo do_shortcode('[slide-anything id="1246"]'); ?>
                        </div>
                        <div class="col-8 mt-3">
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <h3>A4 Adult Cooling Performance Crew T-Shirts</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-7 mt-3">
                                    <p>
                                        A4's 5-Star Fabric - 4.0 Ounce Micro Poly Interlock
                                        Superior moisture wicking for peak performance
                                        Ultra-tight knit for better opacity and printability
                                        Stain release and odor resistant for easy care
                                        Fade and snag resistant for durability
                                        44+ UPF for UV sun protection
                                        Reinforced shoulder seams
                                        Double needle cover stitch hem
                                        Transitioning to tag free neck
                                        Made in the USA
                                    </p>
                                </div>
                                <div class="col-5 mt-3 center">
                                    <p class="shopPrice">Price: $1</p>
                                    <!-- <p class="shopPrice">Price: $22</p> -->
                                    <p class="shopQuantity">Quantity: <input v-model="tShirt.count" placeholder="1" type="number" min="1"></p>
                                    <select
                                            v-model="tShirt.size"
                                            :class="{ 'field-not-valid' : error.tShirt }"
                                            class="form-select pl-2 pr-2"
                                    >
                                        <option disabled value="">Choose size</option>
                                        <option value="small">Small</option>
                                        <option value="medium">Medium</option>
                                        <option value="large">Large</option>
                                        <option value="xlarge">XLarge</option>
                                        <option value="xxlarge">XXLarge</option>
                                    </select>
                                    <button @click="addTShirt" type="button" class="btn btn-primary">Add to cart</button>

                                    <div class="error-message" v-if="this.error.tShirt">Please choose size!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 block">
                    <div class="row">
                        <div class="col-4 slider-img">
                            <?php echo do_shortcode('[slide-anything id="1233"]'); ?>
                        </div>
                        <div class="col-8 mt-3">
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <h3>Pacific Headwear 104C Trucker Mesh Baseball Cap</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-7 mt-3">
                                    <p>
                                        The tried-and-true Trucker Snapback from Pacific Headwear is the definition of trucker mesh royalty. Featuring a pro-stitched finish
                                        and contrast stitching on neon/graphite colorways, this cap will be sure to reign supreme as a snapback classic. Made in the USA.
                                        Crown: Mid-Profile,Pro-Model <br/>
                                        Visor: Curved <br/>
                                        Closure: Snapback <br/>
                                        Fabric: Cotton Blend | Trucker Mesh
                                        Size:<br/>
                                        Adult - One Size Fits Most
                                    </p>
                                </div>
                                <div class="col-5 mt-3 center">
                                    <p class="shopPrice">Price: $1</p>
                                    <!-- <p class="shopPrice">Price: $26</p> -->
                                    <p class="shopQuantity">Quantity: <input v-model="snap.count" placeholder="1" type="number" min="1"></p>
                                    <select
                                            v-model="snap.size"
                                            :class="{ 'field-not-valid' : error.snap }"
                                            class="form-select pl-2 pr-2"
                                    >
                                        <option disabled value="">Choose size</option>
                                        <option value="small">Small</option>
                                        <option value="medium">Medium</option>
                                        <option value="large">Large</option>
                                        <option value="xlarge">XLarge</option>
                                        <option value="xxlarge">XXLarge</option>
                                    </select>
                                    <button @click="addSnap" type="button" class="btn btn-primary">Add to cart</button>

                                    <div class="error-message" v-if="this.error.snap">Please choose size!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 block">
                    <div class="row">
                        <div class="col-4 slider-img__prelast">
                            <?php echo do_shortcode('[slide-anything id="1242"]'); ?>
                        </div>
                        <div class="col-8 mt-3">
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <h3>CHAMPIONS TANK TOP</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-7 mt-3">
                                    <p>
                                        Classic tank surrounds you in soft, ring-spun cotton. Old school contrast bound neckline and arm openings.
                                        Delivers the quality detailing you expect from Champion athleticwear, from the athletic fit to soft back neck taping and
                                        reinforced seams. Tee's script Champion logo completes the authentic athleticwear style. Cotton jersey is ring-spun with a
                                        higher stitch density for durability and
                                        softness. Back neck taping keeps things smooth against your skin.  Fabric: 100% Cotton; oxford: 90% cotton/10% polyester
                                    </p>
                                </div>
                                <div class="col-5 mt-3 center">
                                    <p class="shopPrice">Price: $1</p>
                                    <!-- <p class="shopPrice">Price: $20</p> -->
                                    <p class="shopQuantity">Quantity: <input v-model="top.count" placeholder="1" type="number" min="1"></p>
                                    <select
                                            v-model="top.size"
                                            :class="{ 'field-not-valid' : error.top }"
                                            class="form-select pl-2 pr-2"
                                    >
                                        <option disabled value="">Choose size</option>
                                        <option value="small">Small</option>
                                        <option value="medium">Medium</option>
                                        <option value="large">Large</option>
                                        <option value="xlarge">XLarge</option>
                                        <option value="xxlarge">XXLarge</option>
                                    </select>
                                    <button @click="addTop" type="button" class="btn btn-primary">Add to cart</button>

                                    <div class="error-message" v-if="this.error.top">Please choose size!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 block">
                <div class="row">
                    <div class="col-4 slider-img__last">
                        <?php echo do_shortcode('[slide-anything id="1517"]'); ?>
                    </div>
                    <div class="col-8 mt-3">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <h3>MARX CARDS PSA CARD STANDS</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-3">
                                <p>
                                    Cleanly display your trading cards with our 3D printed Marx Cards PSA stands! Custom designed to fit your PSA slabbed cards. Simply slide your case into the stand and easily display in a case or on a shelf! Made from environment friendly white or black PLA.
                                    Available in economical 4 packs!
                                    All of our stands are made to fit cases for up to standard thickness cards (20-35pt). Cases or slabs for thicker cards (like jersey memorabilia or premium stock cards) have varying dimensions and will not fit in our stands.
                                    Proudly display your Football, Baseball, Basketball, Hockey, Pokemon, Magic, and other cards! These stands make the card the star of the display, not the stand!
                                    Cards shown in pictures are for display purposes only and are not included in the sale of the stands.
                                </p>
                            </div>
                            <div class="col-5 mt-3 center">
                                <p class="shopPrice">Price: $1 per pack <br> (4 stands per)</p>
                                <!-- <p class="shopPrice">$13 per pack (4 stands per)</p> -->
                                <p class="shopQuantity">Quantity: <input v-model="stand.count" placeholder="1" type="number" min="1"></p>
                                <!-- <select
                                        v-model="stand.size"
                                        :class="{ 'field-not-valid' : error.stand }"
                                        class="form-select pl-2 pr-2"
                                >
                                    <option disabled value="">Choose size</option>
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="large">Large</option>
                                    <option value="xlarge">XLarge</option>
                                    <option value="xxlarge">XXLarge</option>
                                </select>-->
                                <button @click="addStand" type="button" class="btn btn-primary">Add to cart</button>

                                <!-- <div class="error-message" v-if="this.error.stand">Please choose size!</div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <transition name="fade">
                <div class="row justify-content-center mb-4" v-show="isAnyItemAdded">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-8">
                        <div style="border: 3px solid black;padding: 1rem;border-radius: 1rem;">
                            <h3 class="text-center">Shopping cart</h3>
                            <div class="column">
                                <div
                                        v-if="cart.hoody.length > 0"
                                        v-for="(item, index) in cart.hoody"
                                        class="d-flex align-center justify-content-between cartItem"
                                >
                                    <div class="column">
                                        <div>MEN'S DRI-POWER® FLEECE HOODIE</div>
                                        <span>Size: {{ item.size }}</span>
                                    </div>
                                    <div class="d-flex">
                                        <div>Quantity: {{ item.count }}</div>
                                        <div @click="deleteHoody(index)" class="cursor-pointer ml-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cancel.png" alt="Cancel" style="width: 24px">
                                        </div>
                                    </div>
                                </div>
                                <div
                                        v-if="cart.tShirt.length > 0"
                                        v-for="(item, index) in cart.tShirt"
                                        class="d-flex align-center justify-content-between cartItem"
                                >
                                    <div class="column">
                                        <div>A4 Adult Cooling Performance Crew T-Shirts</div>
                                        <span>Size: {{ item.size }}</span>
                                    </div>
                                    <div class="d-flex">
                                        <div>Quantity: {{ item.count }}</div>
                                        <div @click="deleteTShirt(index)" class="cursor-pointer ml-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cancel.png" alt="Cancel" style="width: 24px">
                                        </div>
                                    </div>
                                </div>
                                <div
                                        v-if="cart.snap.length > 0"
                                        v-for="(item, index) in cart.snap"
                                        class="d-flex align-center justify-content-between cartItem"
                                >
                                    <div class="column">
                                        <div>Pacific Headwear 104C Trucker Mesh Baseball Cap</div>
                                        <span>Size: {{ item.size }}</span>
                                    </div>
                                    <div class="d-flex">
                                        <div>Quantity: {{ item.count }}</div>
                                        <div @click="deleteSnap(index)" class="cursor-pointer ml-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cancel.png" alt="Cancel" style="width: 24px">
                                        </div>
                                    </div>
                                </div>
                                <div
                                        v-if="cart.top.length > 0"
                                        v-for="(item, index) in cart.top"
                                        class="d-flex align-center justify-content-between cartItem"
                                >
                                    <div class="column">
                                        <div>CHAMPIONS TANK TOP</div>
                                        <span>Size: {{ item.size }}</span>
                                    </div>
                                    <div class="d-flex">
                                        <div>Quantity: {{ item.count }}</div>
                                        <div @click="deleteTop(index)" class="cursor-pointer ml-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cancel.png" alt="Cancel" style="width: 24px">
                                        </div>
                                    </div>
                                </div>
                                <div
                                        v-if="cart.stand.length > 0"
                                        v-for="(item, index) in cart.stand"
                                        class="d-flex align-center justify-content-between cartItem"
                                >
                                    <div class="column">
                                        <div>MARX CARDS PSA CARD STANDS</div>
                                        <span>(4 stands per pack)</span>
                                        <!-- <span>Size: {{ item.size }}</span> -->
                                    </div>
                                    <div class="d-flex">
                                        <div>Quantity: {{ item.count }}</div>
                                        <div @click="deleteStand(index)" class="cursor-pointer ml-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cancel.png" alt="Cancel" style="width: 24px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="d-flex justify-content-end shoppingSum" v-if="price">Total sum: {{ price }}$</span>
                        </div>
                    </div>
                </div>
            </transition>
            <div class="row justify-content-center align-items-center" style="margin-top: 25px">
                <div class="col-12 col-sm-10 col-md-10 col-lg-8 col-xl-6 center">
                    <div style="border: 3px solid black;padding: 1rem;border-radius: 1rem;">
                        <h3>PAYMENT</h3>
                        <?php echo do_shortcode("[wpep_form]"); ?>
                        <span>By clicking Submit, you authorize Marx Cards to charge your credit card for this order, and you accept Marx Cards <a
                                    target="_blank" href="/terms-and-services">Terms of Service.</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                cart: {
                    hoody: [],
                    top: [],
                    stand: [],
                    tShirt: [],
                    snap: []
                },
                hoody: {
                    size: '',
                    count: 1
                },
                top: {
                    size: '',
                    count: 1
                },
                tShirt: {
                    size: '',
                    count: 1
                },
                snap: {
                    size: '',
                    count: 1
                },
                stand: {
                    size: '',
                    count: 1
                },
                error: {
                    hoody: false,
                    top: false,
                    stand: false,
                    tShirt: false,
                    snap: false
                },
                price: 0
            },
            methods: {
                addHoody () {
                    this.error.hoody = false
                    if (!this.isHoodyValid) {
                        this.error.hoody = true
                    } else {
                        if (this.cart.hoody.length > 0) {
                            // do search
                            let isCounted = false
                            this.cart.hoody.forEach(item => {
                                const index = this.cart.hoody.indexOf(item)
                                if (item.size === this.hoody.size) {
                                    for (let i = 0; i < this.hoody.count; ++i) {
                                        this.cart.hoody[index].count = ++this.cart.hoody[index].count
                                    }
                                    this.price += 1 * this.hoody.count
                                    /*this.price += 40 * this.hoody.count*/
                                    isCounted = true
                                }
                            })
                            if (!isCounted) {
                                this.cart.hoody.push({
                                    size: this.hoody.size,
                                    count: this.hoody.count
                                })
                                this.price += 1 * this.hoody.count
                                /*this.price += 40 * this.hoody.count*/
                            }
                        } else {
                            this.cart.hoody.push({
                                size: this.hoody.size,
                                count: this.hoody.count
                            })
                            this.price += 1 * this.hoody.count
                            /*this.price += 40 * this.hoody.count*/
                        }
                    }
                },
                addTShirt () {
                    this.error.tShirt = false
                    if (!this.isTShirtValid) {
                        this.error.tShirt = true
                    } else {
                        if (this.cart.tShirt.length > 0) {
                            // do search
                            let isCounted = false
                            this.cart.tShirt.forEach(item => {
                                const index = this.cart.tShirt.indexOf(item)
                                if (item.size === this.tShirt.size) {
                                    for (let i = 0; i < this.tShirt.count; ++i) {
                                        this.cart.tShirt[index].count = ++this.cart.tShirt[index].count
                                    }
                                    this.price += 1 * this.tShirt.count
                                    /*this.price += 22 * this.tShirt.count*/
                                    isCounted = true
                                }
                            })
                            if (!isCounted) {
                                this.cart.tShirt.push({
                                    size: this.tShirt.size,
                                    count: this.tShirt.count
                                })
                                this.price += 1 * this.tShirt.count
                                /*this.price += 22 * this.tShirt.count*/
                            }
                        } else {
                            this.cart.tShirt.push({
                                size: this.tShirt.size,
                                count: this.tShirt.count
                            })
                            this.price += 1 * this.tShirt.count
                            /*this.price += 22 * this.tShirt.count*/
                        }
                    }
                },
                addTop () {
                    this.error.top = false
                    if (!this.isTopValid) {
                        this.error.top = true
                    } else {
                        if (this.cart.top.length > 0) {
                            // do search
                            let isCounted = false
                            this.cart.top.forEach(item => {
                                const index = this.cart.top.indexOf(item)
                                if (item.size === this.top.size) {
                                    for (let i = 0; i < this.top.count; ++i) {
                                        this.cart.top[index].count = ++this.cart.top[index].count
                                    }
                                    this.price += 1 * this.top.count
                                    /*this.price += 20 * this.top.count*/
                                    isCounted = true
                                }
                            })
                            if (!isCounted) {
                                this.cart.top.push({
                                    size: this.top.size,
                                    count: this.top.count
                                })
                                this.price += 1 * this.top.count
                                /*this.price += 20 * this.top.count*/
                            }
                        } else {
                            this.cart.top.push({
                                size: this.top.size,
                                count: this.top.count
                            })
                            this.price += 1 * this.top.count
                            /*this.price += 20 * this.top.count*/
                        }
                    }
                },
                addStand () {
                    this.error.stand = false
                    if (!this.isStandValid) {
                        this.error.stand = true
                    } else {
                        if (this.cart.stand.length > 0) {
                            // do search
                            let isCounted = false
                            this.cart.stand.forEach(item => {
                                const index = this.cart.stand.indexOf(item)
                                if (item.size === this.stand.size) {
                                    for (let i = 0; i < this.stand.count; ++i) {
                                        this.cart.stand[index].count = ++this.cart.stand[index].count
                                    }
                                    this.price += 1 * this.stand.count
                                    /*this.price += 20 * this.top.count*/
                                    isCounted = true
                                }
                            })
                            if (!isCounted) {
                                this.cart.stand.push({
                                    size: this.stand.size,
                                    count: this.stand.count
                                })
                                this.price += 1 * this.stand.count
                                /*this.price += 20 * this.top.count*/
                            }
                        } else {
                            this.cart.stand.push({
                                size: this.stand.size,
                                count: this.stand.count
                            })
                            this.price += 1 * this.stand.count
                            /*this.price += 20 * this.top.count*/
                        }
                    }
                },
                addSnap () {
                    this.error.snap = false
                    if (!this.isSnapValid) {
                        this.error.snap = true
                    } else {
                        if (this.cart.snap.length > 0) {
                            // do search
                            let isCounted = false
                            this.cart.snap.forEach(item => {
                                const index = this.cart.snap.indexOf(item)
                                if (item.size === this.snap.size) {
                                    for (let i = 0; i < this.snap.count; ++i) {
                                        this.cart.snap[index].count = ++this.cart.snap[index].count
                                    }
                                    this.price += 1 * this.snap.count
                                    /*this.price += 26 * this.snap.count*/
                                    isCounted = true
                                }
                            })
                            if (!isCounted) {
                                this.cart.snap.push({
                                    size: this.snap.size,
                                    count: this.snap.count
                                })
                                this.price += 1 * this.snap.count
                                /*this.price += 26 * this.snap.count*/
                            }
                        } else {
                            this.cart.snap.push({
                                size: this.snap.size,
                                count: this.snap.count
                            })
                            this.price += 1 * this.snap.count
                            /*this.price += 26 * this.snap.count*/
                        }
                    }
                },
                deleteHoody () {
                    this.cart.hoody.splice(index, 1)
                },
                deleteTop (index) {
                    this.cart.top.splice(index, 1)
                },
                deleteStand (index) {
                    this.cart.stand.splice(index, 1)
                },
                deleteSnap (index) {
                    this.cart.top.splice(index, 1)
                },
                deleteTShirt (index) {
                    this.cart.tShirt.splice(index, 1)
                }
            },
            watch: {
                price () {
                    if (this.price > 0) {
                        document.getElementsByName("wpep-selected-amount")[0].value = this.price + '';
                        document.getElementById('amount_display_1').innerHTML = this.price + '';
                    }
                }
            },
            computed: {
                isHoodyValid () {
                    return this.hoody.size.length !== 0
                },
                isTShirtValid () {
                    return this.tShirt.size.length !== 0
                },
                isSnapValid () {
                    return this.snap.size.length !== 0
                },
                isTopValid () {
                    return this.top.size.length !== 0
                },
                isStandValid () {
                    return this.stand.count.length !== 0
                    // return this.stand.size.length !== 0
                },
                isAnyItemAdded () {
                    return this.cart.hoody.length > 0 || this.cart.top.length > 0 || this.cart.stand.length > 0 || this.cart.tShirt.length > 0 || this.cart.snap.length > 0
                }
            }
        })
    </script>


<?php
get_footer();
