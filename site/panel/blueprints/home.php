<?php if(!defined('KIRBY')) exit ?>

# Blueprints for a project

title: Project
pages: false
files: true
fields:
    title:
        label: Name of Project
        type: text
        required: true
    featured_img:
        label: Featured Image
        type:  imagepicker
        width: 100
        placeholder:
            en: No uploaded images yet
    orientation:
        label: Orientation
        type: text
        required: false
    featured_video:
        label: Featured Video
        type:  text
        required: false
    tier:
        label: Project Tier
        type: radio
        options:
          1: Tier I
          2: Tier II
        default: 1
    shop:
        label: In Shop
        type: radio
        options:
          true : 'Yes'
          false: 'No'
        default: 'false'
    caption_1:
        label: Caption Line 1 - Category, Year
        type: tags
        index: all
        required: false
        help: "example: Editorial, 2011"

    caption_2:
        label: Caption Line 2 - Client, Name of Project
        type: tags
        index: all
        required: true
        help: "example: Teen Vogue, September cover"

    caption_3:
        label: Caption Line 3 - Collaborator or Agency, Subject or Casting
        type: tags
        index: all
        required: false
        help: "example: Dan Jackson, Emma Stone"

    caption_4:
        label: Caption Line 4 - Colors, Typefaces, Additional Tags
        type: tags
        index: all
        required: false
        help: "examples: neon orange, ITC, Avantgarde"