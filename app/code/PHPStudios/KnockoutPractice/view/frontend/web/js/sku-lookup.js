
/*
 *
 *  * Copyright (c) 2022.
 *  * Code by MUHAMMAD NASEER ASLAM.
 *  * You are not allowed to replicate my code as extension without permission.
 *  * If you need further help contact me on naseeraslamkhan016@gmail.com
 *
 */

define(
    [
        'uiComponent',
        'ko',
        'mage/storage'
    ],
    function (
        Component,
        ko,
        storage
    ) {
        'use strict';
        return Component.extend({
            defaults:{
                // Best approach to write in xml file so easy override
                // template: 'PHPStudios_KnockoutPractice/sku-lookup',
                sku: ko.observable('24-MB01'),
                placeholder: 'Example: 24-MB01 '
            },
            initialize(){
                this._super();
                console.log('Woww Naseer You did stunning job');
            },
            handleSubmit()
            {
                storage.get(`rest/V1/products/${this.sku()}`)
                    .done(response =>{
                        console.log(response);
                    })
            }
        });
    }
)

